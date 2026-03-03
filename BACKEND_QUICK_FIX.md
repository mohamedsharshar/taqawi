# إصلاح مشكلة Backend بسرعة ⚡

## المشكلة
ملف `artisan` والملفات الأساسية الأخرى مفقودة من مجلد `arab-seeds-backend`.

## الحل السريع (5 دقائق)

### الخطوة 1: إنشاء مشروع Laravel جديد

```bash
# في نفس المجلد الرئيسي
composer create-project laravel/laravel arab-seeds-backend-new
```

انتظر حتى ينتهي التثبيت (حوالي 2-3 دقائق)

### الخطوة 2: نسخ الملفات المخصصة

#### على Windows:
```bash
# شغل الـ script
copy-custom-files.bat
```

#### على Mac/Linux:
```bash
# اعطي صلاحيات التنفيذ
chmod +x copy-custom-files.sh

# شغل الـ script
./copy-custom-files.sh
```

### الخطوة 3: إعداد المشروع الجديد

```bash
cd arab-seeds-backend-new

# نسخ .env
copy .env.example .env    # Windows
# أو
cp .env.example .env      # Mac/Linux

# توليد المفتاح
php artisan key:generate
```

### الخطوة 4: تعديل .env

افتح ملف `.env` وعدل:

```env
APP_NAME="Arab Seeds API"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=arab_seeds
DB_USERNAME=root
DB_PASSWORD=

CORS_ALLOWED_ORIGINS=http://localhost:3000
```

### الخطوة 5: إعداد قاعدة البيانات

```bash
# إنشاء قاعدة البيانات (في MySQL)
mysql -u root -p
CREATE DATABASE arab_seeds CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# تشغيل Migrations
php artisan migrate

# إضافة بيانات تجريبية
php artisan db:seed

# إنشاء storage link
php artisan storage:link
```

### الخطوة 6: تشغيل السيرفر

```bash
php artisan serve
```

✅ Backend جاهز على: http://localhost:8000

## اختبار سريع

```bash
# اختبر الـ API
curl http://localhost:8000/api/v1/financial-statements
curl http://localhost:8000/api/v1/meeting-minutes
curl http://localhost:8000/api/v1/ir-manager
```

## إذا لم يعمل Script النسخ

انسخ الملفات يدوياً:

### Models (3 ملفات)
```bash
copy arab-seeds-backend\app\Models\*.php arab-seeds-backend-new\app\Models\
```

### Controllers (3 ملفات)
```bash
mkdir arab-seeds-backend-new\app\Http\Controllers\Api
copy arab-seeds-backend\app\Http\Controllers\Api\*.php arab-seeds-backend-new\app\Http\Controllers\Api\
```

### Migrations (3 ملفات)
```bash
copy arab-seeds-backend\database\migrations\2024_01_01_*.php arab-seeds-backend-new\database\migrations\
```

### Seeders (2 ملفات)
```bash
copy arab-seeds-backend\database\seeders\*.php arab-seeds-backend-new\database\seeders\
```

### Routes و Config
```bash
copy arab-seeds-backend\routes\api.php arab-seeds-backend-new\routes\
copy arab-seeds-backend\config\cors.php arab-seeds-backend-new\config\
```

## بعد التأكد أن كل شيء يعمل

```bash
# احذف المجلد القديم
rm -rf arab-seeds-backend

# غير اسم المجلد الجديد
mv arab-seeds-backend-new arab-seeds-backend
```

## ملاحظات

- ✅ Frontend يعمل بدون تغيير
- ✅ الـ API endpoints نفسها
- ✅ قاعدة البيانات نفسها
- ✅ فقط المجلد تغير

---

الآن كل شيء يجب أن يعمل! 🎉
