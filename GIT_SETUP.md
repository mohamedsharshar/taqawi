# 🚀 خطوات رفع المشروع على GitHub

## ✅ الملفات جاهزة ومحفوظة في Git!

---

## 📝 الخطوات:

### 1️⃣ إنشاء Repository على GitHub:

1. اذهب إلى: https://github.com/new
2. **Repository name**: `taqawi`
3. **Description**: "التحالف العربي لإنتاج التقاوي - الموقع الرسمي"
4. اختر: **Public** (أو Private حسب رغبتك)
5. **لا تختر** "Add a README file"
6. **لا تختر** "Add .gitignore"
7. **لا تختر** "Choose a license"
8. اضغط: **"Create repository"**

---

### 2️⃣ رفع الملفات:

بعد إنشاء الـ repository، شغل الأوامر دي:

```bash
git remote add origin https://github.com/mohamedsharshar/taqawi.git
git branch -M main
git push -u origin main
```

**ملاحظة**: الـ remote موجود بالفعل، فقط شغل:
```bash
git push -u origin main
```

---

### 3️⃣ التحقق:

بعد الرفع، اذهب إلى:
```
https://github.com/mohamedsharshar/taqawi
```

يجب أن ترى جميع الملفات! ✅

---

## 🌐 بعد الرفع على GitHub:

### ربط Netlify:

1. اذهب إلى: https://app.netlify.com
2. اضغط: **"Add new site"** → **"Import an existing project"**
3. اختر: **GitHub**
4. ابحث عن: **taqawi**
5. اختر الـ repository
6. **لا تغير أي إعدادات!** (ملف netlify.toml جاهز)
7. اضغط: **"Deploy site"**

---

## 📊 الحالة الحالية:

✅ Git initialized
✅ Files committed
✅ Remote configured: https://github.com/mohamedsharshar/taqawi.git
✅ Branch: main
⏳ Waiting for: Repository creation on GitHub

---

## 🔄 التحديثات المستقبلية:

بعد إنشاء الـ repository، أي تحديث:

```bash
git add .
git commit -m "Update description"
git push
```

Netlify سيعيد البناء تلقائياً! ✨

---

## ⚠️ ملاحظة مهمة:

إذا كان الـ repository موجود بالفعل وفيه ملفات:

```bash
git pull origin main --allow-unrelated-histories
git push -u origin main
```

---

**جاهز للرفع! 🚀**

فقط اعمل الـ repository على GitHub وشغل `git push`!
