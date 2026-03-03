# دليل الإعداد الكامل - Arab Seeds Full Stack Project

## نظرة عامة

مشروع متكامل لموقع التحالف العربي لإنتاج التقاوي يتكون من:
- **Frontend**: React.js مع Tailwind CSS و i18next للترجمة
- **Backend**: Laravel 12 API مع MySQL

## هيكل المشروع

```
.
├── arab-seeds-website/     # React Frontend
│   ├── src/
│   │   ├── pages/
│   │   │   └── InvestorsPage.js
│   │   ├── services/
│   │   │   └── api.js
│   │   └── translations/
│   └── package.json
│
└── arab-seeds-backend/     # Laravel Backend
    ├── app/
    │   ├── Http/Controllers/Api/
    │   └── Models/
    ├── database/
    │   ├── migrations/
    │   └── seeders/
    └── routes/
        └── api.php
```

## المتطلبات

### Backend
- PHP 8.2+
- Composer
- MySQL 8.0+
- Laravel 12

### Frontend
- Node.js 16+
- npm أو yarn

## خطوات التثبيت

### 1. إعداد Backend (Laravel)

```bash
# الانتقال لمجلد Backend
cd arab-seeds-backend

# تثبيت Dependencies
composer install

# نسخ ملف البيئة
cp .env.example .env

# توليد مفتاح التطبيق
php artisan key:generate

# إنشاء قاعدة البيانات
mysql -u root -p
CREATE DATABASE arab_seeds CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit;

# تعديل .env
# DB_DATABASE=arab_seeds
# DB_USERNAME=root
# DB_PASSWORD=your_password

# تشغيل Migrations
php artisan migrate

# إضافة بيانات تجريبية
php artisan db:seed

# إنشاء رابط التخزين
php artisan storage:link

# تشغيل السيرفر
php artisan serve
```

Backend سيعمل على: `http://localhost:8000`

### 2. إعداد Frontend (React)

```bash
# الانتقال لمجلد Frontend
cd arab-seeds-website

# تثبيت Dependencies
npm install

# نسخ ملف البيئة
cp .env.example .env

# تعديل .env
# REACT_APP_API_URL=http://localhost:8000/api/v1

# تشغيل التطبيق
npm start
```

Frontend سيعمل على: `http://localhost:3000`

## الميزات المطبقة

### صفحة علاقات المستثمرين

#### 1. القوائم المالية
- عرض قائمة القوائم المالية المتاحة
- تحميل ملفات PDF
- دعم اللغتين العربية والإنجليزية
- ترتيب حسب التاريخ

#### 2. محاضر الجمعيات ومجالس الإدارة
- عرض محاضر الاجتماعات
- تحميل ملفات PDF
- تصنيف (جمعية عمومية / مجلس إدارة)
- دعم متعدد اللغات

#### 3. مدير علاقات المستثمرين
- عرض معلومات الاتصال
- الاسم والمنصب
- رقم الهاتف والإيميل
- صورة شخصية (اختياري)

## API Endpoints

### Public Endpoints (لا تحتاج مصادقة)

```
GET /api/v1/financial-statements
GET /api/v1/financial-statements/{id}
GET /api/v1/meeting-minutes
GET /api/v1/meeting-minutes/{id}
GET /api/v1/ir-manager
```

### Protected Endpoints (تحتاج مصادقة)

```
POST   /api/v1/financial-statements
POST   /api/v1/financial-statements/{id}
DELETE /api/v1/financial-statements/{id}

POST   /api/v1/meeting-minutes
POST   /api/v1/meeting-minutes/{id}
DELETE /api/v1/meeting-minutes/{id}

POST   /api/v1/ir-manager
POST   /api/v1/ir-manager/{id}
DELETE /api/v1/ir-manager/{id}
```

## اختبار API

### باستخدام cURL

```bash
# الحصول على القوائم المالية
curl http://localhost:8000/api/v1/financial-statements

# الحصول على محاضر الاجتماعات
curl http://localhost:8000/api/v1/meeting-minutes

# الحصول على معلومات مدير علاقات المستثمرين
curl http://localhost:8000/api/v1/ir-manager
```

### باستخدام Postman

1. استيراد Collection من `arab-seeds-backend/postman/`
2. تعيين Environment Variable: `base_url = http://localhost:8000/api/v1`
3. اختبار Endpoints

## رفع الملفات

### رفع قائمة مالية

```bash
curl -X POST http://localhost:8000/api/v1/financial-statements \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -F "title_ar=قائمة المركز المالي 2025" \
  -F "title_en=Balance Sheet 2025" \
  -F "description_ar=قائمة المركز المالي للعام 2025" \
  -F "description_en=Balance sheet for 2025" \
  -F "statement_date=2025-12-31" \
  -F "type=balance_sheet" \
  -F "file=@/path/to/balance-sheet.pdf"
```

### رفع محضر اجتماع

```bash
curl -X POST http://localhost:8000/api/v1/meeting-minutes \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -F "title_ar=محضر اجتماع الجمعية العمومية" \
  -F "title_en=General Assembly Meeting Minutes" \
  -F "meeting_date=2025-03-15" \
  -F "type=general_assembly" \
  -F "file=@/path/to/minutes.pdf"
```

## قاعدة البيانات

### الجداول

#### financial_statements
- القوائم المالية (قائمة المركز المالي، قائمة الدخل، إلخ)
- تخزين ملفات PDF
- دعم اللغتين

#### meeting_minutes
- محاضر الاجتماعات
- تصنيف حسب النوع
- تخزين ملفات PDF

#### ir_managers
- معلومات مدير علاقات المستثمرين
- معلومات الاتصال
- صورة شخصية

## الأمان

### للإنتاج

1. **Backend (.env)**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
CORS_ALLOWED_ORIGINS=https://your-frontend-domain.com
```

2. **Frontend (.env)**
```env
REACT_APP_API_URL=https://your-api-domain.com/api/v1
```

3. **إعداد HTTPS**
4. **إعداد Laravel Sanctum للمصادقة**
5. **تفعيل Rate Limiting**
6. **إعداد Backup للقاعدة البيانات**

## استكشاف الأخطاء

### Backend لا يعمل
```bash
# تحقق من الـ logs
tail -f storage/logs/laravel.log

# تحقق من الـ permissions
chmod -R 775 storage bootstrap/cache
```

### Frontend لا يتصل بالـ API
```bash
# تحقق من CORS في Backend
# تحقق من .env في Frontend
# تحقق من Console في المتصفح
```

### الملفات لا تُرفع
```bash
# تحقق من storage link
php artisan storage:link

# تحقق من permissions
chmod -R 775 storage/app/public
```

## التطوير المستقبلي

- [ ] نظام مصادقة كامل (Admin Panel)
- [ ] لوحة تحكم لإدارة المحتوى
- [ ] نظام إشعارات للمستثمرين
- [ ] تقارير تحليلية
- [ ] API Documentation (Swagger)
- [ ] Unit Tests
- [ ] CI/CD Pipeline

## الدعم

للمساعدة أو الاستفسارات:
- Email: dev@arabseeds.com
- Documentation: راجع ملفات README في كل مجلد

## الترخيص

MIT License
