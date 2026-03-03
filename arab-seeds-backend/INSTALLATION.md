# دليل التثبيت والإعداد - Arab Seeds Backend

## المتطلبات

- PHP 8.2 أو أحدث
- Composer
- MySQL 8.0 أو أحدث
- Node.js و npm (اختياري للـ frontend)

## خطوات التثبيت

### 1. تثبيت Laravel

```bash
cd arab-seeds-backend
composer install
```

### 2. إعداد البيئة

```bash
# نسخ ملف البيئة
cp .env.example .env

# توليد مفتاح التطبيق
php artisan key:generate
```

### 3. إعداد قاعدة البيانات

افتح ملف `.env` وقم بتعديل إعدادات قاعدة البيانات:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=arab_seeds
DB_USERNAME=root
DB_PASSWORD=your_password
```

أنشئ قاعدة البيانات:

```sql
CREATE DATABASE arab_seeds CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 4. تشغيل Migrations

```bash
php artisan migrate
```

### 5. إضافة بيانات تجريبية (اختياري)

```bash
php artisan db:seed
```

### 6. إنشاء رابط التخزين

```bash
php artisan storage:link
```

### 7. تشغيل السيرفر

```bash
php artisan serve
```

السيرفر سيعمل على: `http://localhost:8000`

## إعداد CORS للـ React Frontend

في ملف `.env`:

```env
CORS_ALLOWED_ORIGINS=http://localhost:3000
```

## اختبار API

### 1. الحصول على القوائم المالية

```bash
curl http://localhost:8000/api/v1/financial-statements
```

### 2. الحصول على محاضر الاجتماعات

```bash
curl http://localhost:8000/api/v1/meeting-minutes
```

### 3. الحصول على معلومات مدير علاقات المستثمرين

```bash
curl http://localhost:8000/api/v1/ir-manager
```

## رفع ملف PDF (يتطلب Authentication)

```bash
curl -X POST http://localhost:8000/api/v1/financial-statements \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -F "title_ar=قائمة المركز المالي" \
  -F "title_en=Balance Sheet" \
  -F "statement_date=2025-12-31" \
  -F "type=balance_sheet" \
  -F "file=@/path/to/file.pdf"
```

## هيكل المجلدات

```
arab-seeds-backend/
├── app/
│   ├── Http/Controllers/Api/
│   │   ├── FinancialStatementController.php
│   │   ├── MeetingMinuteController.php
│   │   └── IrManagerController.php
│   └── Models/
│       ├── FinancialStatement.php
│       ├── MeetingMinute.php
│       └── IrManager.php
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   └── api.php
└── storage/
    └── app/public/
        ├── financial-statements/
        ├── meeting-minutes/
        └── ir-managers/
```

## الأمان

للإنتاج، تأكد من:

1. تغيير `APP_KEY` في `.env`
2. تعيين `APP_DEBUG=false`
3. تعيين `APP_ENV=production`
4. استخدام HTTPS
5. إعداد نظام المصادقة (Sanctum)
6. تحديد الـ CORS origins بدقة

## الدعم

للمساعدة أو الاستفسارات، تواصل مع فريق التطوير.
