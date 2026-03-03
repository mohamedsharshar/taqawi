# دليل البدء السريع 🚀

## ملخص المشروع

تم إنشاء نظام متكامل لإدارة علاقات المستثمرين يتكون من:

### Frontend (React)
✅ صفحة علاقات المستثمرين محدثة
✅ إزالة الجداول التفصيلية
✅ 3 أقسام رئيسية:
   - القوائم المالية (تحميل PDF)
   - محاضر الجمعيات ومجالس الإدارة (تحميل PDF)
   - مدير علاقات المستثمرين (معلومات الاتصال)

### Backend (Laravel 12)
✅ API كامل للبيانات
✅ رفع وإدارة ملفات PDF
✅ قاعدة بيانات MySQL
✅ دعم اللغتين العربية والإنجليزية

## البدء السريع

### 1. Backend (5 دقائق)

```bash
cd arab-seeds-backend
composer install
cp .env.example .env
php artisan key:generate

# أنشئ قاعدة بيانات اسمها: arab_seeds
# ثم عدل .env وضع بيانات قاعدة البيانات

php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan serve
```

✅ Backend جاهز على: http://localhost:8000

### 2. Frontend (3 دقائق)

```bash
cd arab-seeds-website
npm install
cp .env.example .env
npm start
```

✅ Frontend جاهز على: http://localhost:3000

## اختبار سريع

افتح المتصفح على:
```
http://localhost:3000/investors
```

يجب أن تشاهد:
- ✅ 3 بطاقات (القوائم المالية، المحاضر، مدير العلاقات)
- ✅ بيانات تجريبية من الـ API
- ✅ روابط تحميل PDF

## API Endpoints

```bash
# اختبر الـ API
curl http://localhost:8000/api/v1/financial-statements
curl http://localhost:8000/api/v1/meeting-minutes
curl http://localhost:8000/api/v1/ir-manager
```

## الملفات المهمة

### Frontend
- `arab-seeds-website/src/pages/InvestorsPage.js` - الصفحة الرئيسية
- `arab-seeds-website/src/services/api.js` - الاتصال بالـ API
- `arab-seeds-website/src/translations/ar.json` - الترجمة العربية

### Backend
- `arab-seeds-backend/routes/api.php` - API Routes
- `arab-seeds-backend/app/Models/` - Models
- `arab-seeds-backend/app/Http/Controllers/Api/` - Controllers
- `arab-seeds-backend/database/migrations/` - Database Schema

## رفع ملف PDF جديد

### باستخدام Postman أو cURL:

```bash
curl -X POST http://localhost:8000/api/v1/financial-statements \
  -F "title_ar=قائمة مالية جديدة" \
  -F "title_en=New Financial Statement" \
  -F "statement_date=2025-12-31" \
  -F "type=balance_sheet" \
  -F "file=@/path/to/your-file.pdf"
```

## المشاكل الشائعة

### Backend لا يعمل؟
```bash
# تأكد من:
1. PHP 8.2+ مثبت
2. Composer مثبت
3. MySQL يعمل
4. قاعدة البيانات موجودة
5. .env معدل بشكل صحيح
```

### Frontend لا يتصل بالـ API؟
```bash
# تأكد من:
1. Backend يعمل على port 8000
2. ملف .env في Frontend يحتوي على:
   REACT_APP_API_URL=http://localhost:8000/api/v1
3. لا توجد أخطاء CORS
```

### الملفات لا تظهر؟
```bash
cd arab-seeds-backend
php artisan storage:link
chmod -R 775 storage
```

## الخطوات التالية

1. ✅ اختبر الصفحة في المتصفح
2. ✅ جرب رفع ملف PDF
3. ✅ تحقق من التحميل
4. 📝 أضف بيانات حقيقية
5. 🚀 انشر على السيرفر

## هيكل قاعدة البيانات

### financial_statements
- القوائم المالية بصيغة PDF
- عنوان بالعربي والإنجليزي
- تاريخ القائمة
- نوع القائمة

### meeting_minutes
- محاضر الاجتماعات بصيغة PDF
- عنوان بالعربي والإنجليزي
- تاريخ الاجتماع
- نوع الاجتماع

### ir_managers
- اسم المدير بالعربي والإنجليزي
- المنصب
- التليفون والإيميل
- صورة شخصية (اختياري)

## الدعم

راجع الملفات التالية للمزيد من التفاصيل:
- `SETUP_GUIDE.md` - دليل الإعداد الكامل
- `arab-seeds-backend/README.md` - Backend Documentation
- `arab-seeds-backend/INSTALLATION.md` - تعليمات التثبيت

---

تم إنشاء المشروع بنجاح! 🎉
