# دليل النشر على السيرفر (Production Deployment)

## نظرة عامة

هذا الدليل يشرح كيفية نشر المشروع على سيرفر إنتاج.

## متطلبات السيرفر

### Backend Server
- Ubuntu 20.04+ أو CentOS 8+
- PHP 8.2+
- MySQL 8.0+
- Nginx أو Apache
- Composer
- SSL Certificate (Let's Encrypt)

### Frontend Hosting
- Netlify / Vercel / AWS S3 + CloudFront
- أو نفس سيرفر الـ Backend

## خيارات النشر

### الخيار 1: سيرفر واحد (Recommended for small projects)

```
Server (example.com)
├── /var/www/api.example.com  → Laravel Backend
└── /var/www/example.com      → React Build
```

### الخيار 2: سيرفرين منفصلين

```
Backend Server: api.example.com  → Laravel
Frontend CDN: example.com        → React (Netlify/Vercel)
```

## خطوات النشر

### 1. إعداد Backend على السيرفر

#### أ. رفع الملفات

```bash
# على جهازك المحلي
cd arab-seeds-backend
tar -czf backend.tar.gz .

# رفع للسيرفر
scp backend.tar.gz user@your-server:/var/www/
```

#### ب. على السيرفر

```bash
ssh user@your-server

# فك الضغط
cd /var/www
mkdir api.arabseeds.com
cd api.arabseeds.com
tar -xzf ../backend.tar.gz

# تثبيت Dependencies
composer install --optimize-autoloader --no-dev

# إعداد البيئة
cp .env.example .env
nano .env
```

#### ج. تعديل .env للإنتاج

```env
APP_NAME="Arab Seeds API"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://api.arabseeds.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=arab_seeds_prod
DB_USERNAME=arab_seeds_user
DB_PASSWORD=strong_password_here

CORS_ALLOWED_ORIGINS=https://arabseeds.com

FILESYSTEM_DISK=public
```

#### د. إعداد قاعدة البيانات

```bash
# إنشاء قاعدة البيانات والمستخدم
mysql -u root -p

CREATE DATABASE arab_seeds_prod CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'arab_seeds_user'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT ALL PRIVILEGES ON arab_seeds_prod.* TO 'arab_seeds_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;

# تشغيل Migrations
php artisan migrate --force
php artisan db:seed --force
```

#### هـ. إعداد Permissions

```bash
sudo chown -R www-data:www-data /var/www/api.arabseeds.com
sudo chmod -R 755 /var/www/api.arabseeds.com
sudo chmod -R 775 /var/www/api.arabseeds.com/storage
sudo chmod -R 775 /var/www/api.arabseeds.com/bootstrap/cache

# Storage Link
php artisan storage:link

# Cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### و. إعداد Nginx

```nginx
# /etc/nginx/sites-available/api.arabseeds.com

server {
    listen 80;
    server_name api.arabseeds.com;
    root /var/www/api.arabseeds.com/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

```bash
# تفعيل الموقع
sudo ln -s /etc/nginx/sites-available/api.arabseeds.com /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

#### ز. إعداد SSL

```bash
# تثبيت Certbot
sudo apt install certbot python3-certbot-nginx

# الحصول على شهادة SSL
sudo certbot --nginx -d api.arabseeds.com
```

### 2. إعداد Frontend

#### أ. Build للإنتاج

```bash
# على جهازك المحلي
cd arab-seeds-website

# تعديل .env
echo "REACT_APP_API_URL=https://api.arabseeds.com/api/v1" > .env

# Build
npm run build
```

#### ب. الخيار 1: نشر على Netlify

```bash
# تثبيت Netlify CLI
npm install -g netlify-cli

# تسجيل الدخول
netlify login

# نشر
netlify deploy --prod --dir=build
```

في Netlify Dashboard:
- اضبط Environment Variable: `REACT_APP_API_URL=https://api.arabseeds.com/api/v1`
- اضبط Custom Domain: `arabseeds.com`

#### ج. الخيار 2: نشر على نفس السيرفر

```bash
# رفع build folder
scp -r build/* user@your-server:/var/www/arabseeds.com/

# على السيرفر - إعداد Nginx
sudo nano /etc/nginx/sites-available/arabseeds.com
```

```nginx
server {
    listen 80;
    server_name arabseeds.com www.arabseeds.com;
    root /var/www/arabseeds.com;

    index index.html;

    location / {
        try_files $uri $uri/ /index.html;
    }

    location ~* \.(js|css|png|jpg|jpeg|gif|ico|svg)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/arabseeds.com /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx

# SSL
sudo certbot --nginx -d arabseeds.com -d www.arabseeds.com
```

### 3. إعداد Cron Jobs (اختياري)

```bash
sudo crontab -e

# إضافة
* * * * * cd /var/www/api.arabseeds.com && php artisan schedule:run >> /dev/null 2>&1
```

### 4. إعداد Supervisor للـ Queue (اختياري)

```bash
sudo apt install supervisor

sudo nano /etc/supervisor/conf.d/arab-seeds-worker.conf
```

```ini
[program:arab-seeds-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/api.arabseeds.com/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/api.arabseeds.com/storage/logs/worker.log
```

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start arab-seeds-worker:*
```

## اختبار بعد النشر

### 1. اختبار Backend API

```bash
curl https://api.arabseeds.com/api/v1/financial-statements
curl https://api.arabseeds.com/api/v1/meeting-minutes
curl https://api.arabseeds.com/api/v1/ir-manager
```

### 2. اختبار Frontend

افتح المتصفح:
```
https://arabseeds.com/investors
```

تحقق من:
- ✅ الصفحة تعمل
- ✅ البيانات تظهر من API
- ✅ التحميل يعمل
- ✅ اللغة العربية تعمل

## الأمان

### 1. Firewall

```bash
sudo ufw allow 22
sudo ufw allow 80
sudo ufw allow 443
sudo ufw enable
```

### 2. تحديث النظام

```bash
sudo apt update
sudo apt upgrade
```

### 3. Backup

```bash
# Backup قاعدة البيانات
mysqldump -u arab_seeds_user -p arab_seeds_prod > backup.sql

# Backup الملفات
tar -czf storage-backup.tar.gz /var/www/api.arabseeds.com/storage/app/public
```

### 4. Monitoring

استخدم أدوات مثل:
- Laravel Telescope (للتطوير)
- Sentry (للأخطاء)
- New Relic (للأداء)

## التحديثات المستقبلية

### تحديث Backend

```bash
cd /var/www/api.arabseeds.com
git pull origin main
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
sudo systemctl reload php8.2-fpm
```

### تحديث Frontend

```bash
# على جهازك
npm run build

# رفع للسيرفر أو Netlify
netlify deploy --prod --dir=build
```

## استكشاف الأخطاء

### Backend Errors

```bash
# تحقق من logs
tail -f /var/www/api.arabseeds.com/storage/logs/laravel.log

# تحقق من Nginx logs
tail -f /var/log/nginx/error.log
```

### CORS Issues

تأكد من `.env`:
```env
CORS_ALLOWED_ORIGINS=https://arabseeds.com
```

### File Upload Issues

```bash
# تحقق من permissions
ls -la /var/www/api.arabseeds.com/storage/app/public
sudo chmod -R 775 /var/www/api.arabseeds.com/storage
```

## الدعم

للمساعدة في النشر:
- راجع Laravel Deployment Docs
- راجع Netlify Docs
- تواصل مع فريق DevOps

---

تم! المشروع جاهز للنشر 🚀
