# 🚀 نشر سريع على Netlify

## الخطوات (5 دقائق):

### 1️⃣ رفع على GitHub:
```bash
git init
git add .
git commit -m "Arab Seeds Website - Ready for deployment"
git branch -M main
git remote add origin YOUR_GITHUB_REPO_URL
git push -u origin main
```

### 2️⃣ ربط Netlify:
1. اذهب إلى: https://app.netlify.com
2. اضغط: **"Add new site"** → **"Import an existing project"**
3. اختر: **GitHub**
4. اختر الـ repository
5. **لا تغير أي شيء!** (ملف netlify.toml جاهز)
6. اضغط: **"Deploy site"**

### 3️⃣ انتظر 2-3 دقائق ✅

---

## ⚠️ مهم جداً:

في صفحة إعدادات Netlify، **لا تكتب أي شيء** في:
- ❌ Build command (اتركه فارغ)
- ❌ Publish directory (اتركه فارغ)
- ❌ Base directory (اتركه فارغ)

**ملف `netlify.toml` سيتولى كل شيء تلقائياً!**

---

## 🎉 بعد النشر:

سيعطيك Netlify رابط مثل:
```
https://your-site-name.netlify.app
```

يمكنك تغيير الاسم من:
**Site settings** → **Domain management** → **Change site name**

---

## 🔄 التحديثات المستقبلية:

فقط:
```bash
git add .
git commit -m "Update website"
git push
```

Netlify سيعيد البناء والنشر تلقائياً! ✨

---

## 📞 مشاكل؟

راجع ملف `NETLIFY_DEPLOY.md` للتفاصيل الكاملة.

---

**جاهز! 🚀**
