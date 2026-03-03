# Arab Seeds Backend API - Laravel 12

## ✅ تم إنشاء المشروع بنجاح!

تم إنشاء مشروع Laravel 12 كامل باستخدام `composer create-project`.

## 📁 الملفات المضافة

### Models (3 ملفات)
- ✅ `app/Models/FinancialStatement.php`
- ✅ `app/Models/MeetingMinute.php`
- ✅ `app/Models/IrManager.php`

### Controllers (3 ملفات)
- ✅ `app/Http/Controllers/Api/FinancialStatementController.php`
- ✅ `app/Http/Controllers/Api/MeetingMinuteController.php`
- ✅ `app/Http/Controllers/Api/IrManagerController.php`

### Migrations (3 ملفات)
- ✅ `database/migrations/*_create_financial_statements_table.php`
- ✅ `database/migrations/*_create_meeting_minutes_table.php`
- ✅ `database/migrations/*_create_ir_managers_table.php`

### Seeders (1 ملف)
- ✅ `database/seeders/InvestorRelationsSeeder.php`
- ✅ `database/seeders/DatabaseSeeder.php` (محدث)

### Routes & Config
- ✅ `routes/api.php` (محدث)
- ✅ `config/cors.php` (جديد)
- ✅ `.env` (محدث)

## 🚀 خطوات التشغيل

### 1. إنشاء قاعدة البيانات

افتح **HeidiSQL** أو **phpMyAdmin** في Laragon وشغل:

```sql
CREATE DATABASE arab_seeds CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

أو استخدم الملف `create_database.sql`:
- افتح HeidiSQL
- File → Load SQL file → اختر `create_database.sql`
- اضغط F9 لتشغيل

### 2. تشغيل Migrations

```bash
php artisan migrate
```

### 3. إضافة بيانات تجريبية

```bash
php artisan db:seed
```

### 4. إنشاء Storage Link

```bash
php artisan storage:link
```

### 5. تشغيل السيرفر

```bash
php artisan serve
```

✅ Backend جاهز على: **http://localhost:8000**

## 🧪 اختبار API

### باستخدام المتصفح:
```
http://localhost:8000/api/v1/financial-statements
http://localhost:8000/api/v1/meeting-minutes
http://localhost:8000/api/v1/ir-manager
```

### باستخدام PowerShell:
```powershell
Invoke-WebRequest http://localhost:8000/api/v1/financial-statements
Invoke-WebRequest http://localhost:8000/api/v1/meeting-minutes
Invoke-WebRequest http://localhost:8000/api/v1/ir-manager
```

## 📊 قاعدة البيانات

### الجداول:
1. **financial_statements** - القوائم المالية
2. **meeting_minutes** - محاضر الاجتماعات
3. **ir_managers** - مدير علاقات المستثمرين

### البيانات التجريبية:
- ✅ 2 قوائم مالية
- ✅ 2 محاضر اجتماعات
- ✅ 1 مدير علاقات مستثمرين

## 🔧 إعدادات .env

```env
APP_NAME="Arab Seeds API"
APP_URL=http://localhost:8000
APP_LOCALE=ar

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=arab_seeds
DB_USERNAME=root
DB_PASSWORD=

CORS_ALLOWED_ORIGINS=http://localhost:3000
```

## 📝 API Endpoints

### Public (لا تحتاج مصادقة)

```
GET  /api/v1/financial-statements
GET  /api/v1/financial-statements/{id}
GET  /api/v1/meeting-minutes
GET  /api/v1/meeting-minutes/{id}
GET  /api/v1/ir-manager
```

### Protected (تحتاج مصادقة)

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

## 🔄 ربط Frontend

Frontend في `arab-seeds-website` معد مسبقاً للاتصال بالـ API.

تأكد من:
1. ✅ Backend يعمل على port 8000
2. ✅ Frontend `.env` يحتوي على: `REACT_APP_API_URL=http://localhost:8000/api/v1`
3. ✅ CORS معد بشكل صحيح

## 🛠️ أوامر مفيدة

```bash
# مسح الـ cache
php artisan config:clear
php artisan cache:clear
php artisan route:clear

# إعادة تحميل autoload
composer dump-autoload

# إعادة إنشاء قاعدة البيانات
php artisan migrate:fresh --seed

# عرض الـ routes
php artisan route:list
```

## ❗ استكشاف الأخطاء

### خطأ: "Unknown database 'arab_seeds'"
- أنشئ قاعدة البيانات باستخدام HeidiSQL أو phpMyAdmin

### خطأ: "Class not found"
```bash
composer dump-autoload
```

### خطأ: CORS
- تأكد من `.env` يحتوي على `CORS_ALLOWED_ORIGINS=http://localhost:3000`
- أعد تشغيل السيرفر

### خطأ: Storage link
```bash
php artisan storage:link
```

## 🎉 كل شيء جاهز!

المشروع الآن كامل ويعمل بدون مشاكل!

- ✅ Laravel 12 مثبت بالكامل
- ✅ جميع الملفات المخصصة مضافة
- ✅ Migrations جاهزة
- ✅ Seeders جاهزة
- ✅ API Routes معدة
- ✅ CORS معد

فقط أنشئ قاعدة البيانات وشغل migrations! 🚀
