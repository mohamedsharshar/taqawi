# دليل النشر على Netlify

## 🚀 الطريقة الأولى: من GitHub (موصى بها)

### 1. رفع المشروع على GitHub:
```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/yourusername/arab-seeds-website.git
git push -u origin main
```

### 2. ربط Netlify:
1. اذهب إلى https://app.netlify.com
2. اضغط "Add new site" → "Import an existing project"
3. اختر GitHub واختر الـ repository
4. **لا تغير أي إعدادات!** ملف `netlify.toml` سيتولى كل شيء
5. اضغط "Deploy site"

### 3. انتظر:
- Netlify سيقرأ `netlify.toml` تلقائياً
- سيدخل على مجلد `arab-seeds-website`
- سيشغل `npm install` ثم `npm run build`
- سينشر من مجلد `build`

---

## 📦 الطريقة الثانية: رفع يدوي

### 1. بناء المشروع محلياً:
```bash
cd arab-seeds-website
npm install
npm run build
```

### 2. رفع على Netlify:
1. اذهب إلى https://app.netlify.com/drop
2. اسحب مجلد `arab-seeds-website/build` إلى الصفحة
3. انتظر حتى يكتمل الرفع

---

## ⚙️ إعدادات netlify.toml

الملف موجود في المجلد الرئيسي ويحتوي على:

```toml
[build]
  base = "arab-seeds-website"      # المجلد الأساسي
  command = "npm run build"         # أمر البناء
  publish = "build"                 # مجلد النشر

[[redirects]]
  from = "/*"
  to = "/index.html"
  status = 200                      # لدعم React Router
```

---

## 🔧 حل المشاكل الشائعة:

### المشكلة: "Build command failed"
**الحل:**
- تأكد من وجود ملف `netlify.toml` في المجلد الرئيسي
- تأكد من أن `base = "arab-seeds-website"` صحيح

### المشكلة: "Module not found"
**الحل:**
```bash
cd arab-seeds-website
rm -rf node_modules package-lock.json
npm install
npm run build
```

### المشكلة: "Page not found" عند التنقل
**الحل:**
- تأكد من وجود قسم `[[redirects]]` في `netlify.toml`

### المشكلة: "Build script returned non-zero exit code"
**الحل:**
- تجاهل تحذيرات ESLint (موجودة بالفعل)
- أو أضف في `package.json`:
```json
"scripts": {
  "build": "CI=false react-scripts build"
}
```

---

## 📝 ملاحظات مهمة:

1. ✅ **لا تحتاج** لتغيير أي إعدادات في Netlify UI
2. ✅ **ملف netlify.toml** يتولى كل شيء
3. ✅ **التحذيرات** لا تمنع البناء
4. ✅ **الموقع** سيعمل بشكل مثالي بعد النشر

---

## 🌐 بعد النشر:

1. ستحصل على رابط مثل: `https://random-name-123.netlify.app`
2. يمكنك تغيير الاسم من: Site settings → Domain management
3. يمكنك ربط دومين خاص من: Domain management → Add custom domain

---

## ✅ التحقق من النشر:

بعد النشر، تأكد من:
- ✅ الصفحة الرئيسية تفتح
- ✅ زر Light/Dark Mode يعمل
- ✅ جميع الصفحات تفتح
- ✅ التنقل بين الصفحات يعمل
- ✅ الموقع responsive على الموبايل

---

**جاهز للنشر! 🚀**
