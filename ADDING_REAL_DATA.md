# دليل إضافة البيانات الحقيقية

## 📊 البيانات المطلوبة من ملف PDF

من ملف `docs/عرض تقديمي لشركة التحالف العربي 2026.pdf`، نحتاج:

### 1. القوائم المالية
- قائمة المركز المالي
- قائمة الدخل
- قائمة التدفقات النقدية
- الإيضاحات المتممة

### 2. محاضر الاجتماعات
- محاضر الجمعية العامة
- محاضر مجلس الإدارة

### 3. معلومات مدير علاقات المستثمرين
- الاسم
- المنصب
- البريد الإلكتروني
- رقم الهاتف

---

## 🔧 خطوات إضافة البيانات

### الخطوة 1: تحضير ملفات PDF

1. افتح ملف `docs/عرض تقديمي لشركة التحالف العربي 2026.pdf`
2. استخرج الصفحات المطلوبة كملفات PDF منفصلة:
   - `قائمة_المركز_المالي_2024.pdf`
   - `قائمة_الدخل_2024.pdf`
   - `محضر_الجمعية_العامة_2024.pdf`
   - إلخ...

3. ضع الملفات في المجلدات المناسبة:

```bash
cd arab-seeds-backend

# إنشاء المجلدات
mkdir -p storage/app/public/financial_statements
mkdir -p storage/app/public/meeting_minutes

# نسخ الملفات (مثال)
# انسخ ملفات PDF إلى المجلدات المناسبة
```

### الخطوة 2: تحديث قاعدة البيانات

```bash
cd arab-seeds-backend

# إعادة تشغيل Migrations والبيانات
php artisan migrate:fresh --seed
```

### الخطوة 3: إضافة البيانات يدوياً عبر API

يمكنك استخدام Postman أو curl لإضافة البيانات:

#### إضافة قائمة مالية:

```bash
curl -X POST http://localhost:8000/api/v1/financial-statements \
  -H "Content-Type: multipart/form-data" \
  -F "title_ar=قائمة المركز المالي 2024" \
  -F "title_en=Statement of Financial Position 2024" \
  -F "description_ar=قائمة المركز المالي للتحالف العربي لإنتاج التقاوي" \
  -F "description_en=Arab Alliance for Seeds Production - Statement of Financial Position" \
  -F "statement_date=2024-12-31" \
  -F "file=@/path/to/your/file.pdf"
```

#### إضافة محضر اجتماع:

```bash
curl -X POST http://localhost:8000/api/v1/meeting-minutes \
  -H "Content-Type: multipart/form-data" \
  -F "title_ar=محضر اجتماع الجمعية العامة 2024" \
  -F "title_en=General Assembly Meeting Minutes 2024" \
  -F "description_ar=محضر اجتماع الجمعية العامة العادية" \
  -F "description_en=Ordinary General Assembly Meeting Minutes" \
  -F "meeting_date=2024-03-20" \
  -F "file=@/path/to/your/file.pdf"
```

#### تحديث معلومات مدير العلاقات:

```bash
curl -X POST http://localhost:8000/api/v1/ir-manager \
  -H "Content-Type: application/json" \
  -d '{
    "name_ar": "الاسم بالعربي",
    "name_en": "Name in English",
    "position_ar": "مدير علاقات المستثمرين",
    "position_en": "Investor Relations Manager",
    "email": "ir@arabseeds.com",
    "phone": "+20 2 3854 0123"
  }'
```

---

## 📝 نموذج البيانات المطلوبة

### القوائم المالية

| الحقل | القيمة المتوقعة |
|------|-----------------|
| العنوان (عربي) | قائمة المركز المالي 2024 |
| العنوان (إنجليزي) | Statement of Financial Position 2024 |
| الوصف (عربي) | قائمة المركز المالي للتحالف العربي لإنتاج التقاوي |
| الوصف (إنجليزي) | Arab Alliance for Seeds Production - Statement of Financial Position |
| تاريخ القائمة | 2024-12-31 |
| ملف PDF | قائمة_المركز_المالي_2024.pdf |

### محاضر الاجتماعات

| الحقل | القيمة المتوقعة |
|------|-----------------|
| العنوان (عربي) | محضر اجتماع الجمعية العامة العادية 2024 |
| العنوان (إنجليزي) | Ordinary General Assembly Meeting Minutes 2024 |
| الوصف (عربي) | محضر اجتماع الجمعية العامة العادية للتحالف العربي |
| الوصف (إنجليزي) | Minutes of the Ordinary General Assembly Meeting |
| تاريخ الاجتماع | 2024-03-20 |
| ملف PDF | محضر_الجمعية_العامة_2024.pdf |

### مدير علاقات المستثمرين

| الحقل | القيمة المتوقعة |
|------|-----------------|
| الاسم (عربي) | [من ملف PDF] |
| الاسم (إنجليزي) | [من ملف PDF] |
| المنصب (عربي) | مدير علاقات المستثمرين |
| المنصب (إنجليزي) | Investor Relations Manager |
| البريد الإلكتروني | ir@arabseeds.com |
| الهاتف | +20 2 XXXX XXXX |

---

## 🔍 التحقق من البيانات

### 1. عبر المتصفح

افتح: http://localhost:3000/investors

يجب أن تشاهد:
- ✅ القوائم المالية المضافة
- ✅ محاضر الاجتماعات
- ✅ معلومات مدير العلاقات

### 2. عبر API مباشرة

```bash
# القوائم المالية
curl http://localhost:8000/api/v1/financial-statements

# محاضر الاجتماعات
curl http://localhost:8000/api/v1/meeting-minutes

# مدير العلاقات
curl http://localhost:8000/api/v1/ir-manager
```

---

## 🎯 الخطوات التالية

1. **استخراج البيانات من PDF**
   - افتح ملف `docs/عرض تقديمي لشركة التحالف العربي 2026.pdf`
   - استخرج المعلومات المطلوبة
   - احفظ ملفات PDF منفصلة

2. **رفع الملفات**
   - استخدم Postman أو curl
   - أو أنشئ صفحة admin بسيطة

3. **التحقق**
   - تأكد من ظهور البيانات في الموقع
   - تأكد من إمكانية تحميل ملفات PDF

---

## 💡 نصائح

- احفظ نسخة احتياطية من قاعدة البيانات قبل التعديل
- تأكد من صلاحيات المجلدات (775)
- استخدم أسماء ملفات واضحة بالإنجليزية
- تأكد من حجم الملفات (أقل من 10MB)

---

## 🆘 المساعدة

إذا واجهت مشاكل:

1. تحقق من logs:
```bash
tail -f arab-seeds-backend/storage/logs/laravel.log
```

2. تحقق من الصلاحيات:
```bash
chmod -R 775 arab-seeds-backend/storage
```

3. تحقق من الربط:
```bash
php artisan storage:link
```

---

✅ بعد إضافة البيانات، الموقع سيكون جاهز للاستخدام مع البيانات الحقيقية!
