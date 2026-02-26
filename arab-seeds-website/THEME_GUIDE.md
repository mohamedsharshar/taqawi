# دليل استخدام Light/Dark Mode

## نظرة عامة
تم إضافة نظام كامل للتبديل بين الوضع الفاتح (Light Mode) والوضع الداكن (Dark Mode) للموقع.

## الميزات
✅ الوضع الافتراضي: Light Mode (ألوان فاتحة)
✅ زر تبديل في الـ Header (أيقونة الشمس/القمر)
✅ حفظ الاختيار في localStorage
✅ انتقال سلس بين الأوضاع
✅ دعم كامل لجميع الصفحات

## الألوان المستخدمة

### Light Mode (الوضع الفاتح)
- **الخلفية الرئيسية**: أبيض (#ffffff) وبيج فاتح (#faf8f5)
- **الخلفية الثانوية**: رمادي فاتح جداً (#f5f1ed)
- **النصوص**: رمادي داكن (#2c2520, #4a4a4a)
- **الحدود**: بيج (#e8dfd5)
- **اللون المميز**: أصفر ذهبي (#c59d5f)
- **الكروت**: أبيض مع ظل خفيف

### Dark Mode (الوضع الداكن)
- **الخلفية الرئيسية**: بني داكن (#1c1813)
- **الخلفية الثانوية**: بني (#221e1a)
- **النصوص**: أبيض (#ffffff) ورمادي فاتح (#e5e5e5)
- **الحدود**: بني فاتح (#332e27)
- **اللون المميز**: أصفر (#eab308)
- **الكروت**: بني داكن مع حدود

## كيفية الاستخدام

### للمستخدم
1. افتح الموقع على http://localhost:3000
2. ابحث عن أيقونة الشمس/القمر في الـ Header (أعلى يمين الصفحة)
3. اضغط على الأيقونة للتبديل بين الأوضاع
4. سيتم حفظ اختيارك تلقائياً

### للمطور
استخدم الـ classes التالية في أي component:

```jsx
// خلفية
className="bg-white dark:bg-[#1c1813]"

// نص
className="text-gray-900 dark:text-white"

// حدود
className="border-gray-200 dark:border-[#332e27]"

// لون مميز
className="text-yellow-600 dark:text-yellow-500"
```

## الملفات المحدثة
- ✅ `src/App.js` - إضافة state و logic للـ theme
- ✅ `src/components/Header.js` - زر التبديل
- ✅ `src/components/Footer.js` - ألوان light/dark
- ✅ `src/components/Button.js` - أزرار responsive
- ✅ `src/components/Card.js` - كروت بألوان مختلفة
- ✅ `src/components/SectionTitle.js` - عناوين responsive
- ✅ `src/pages/HomePage.js` - الصفحة الرئيسية
- ✅ `src/index.css` - ألوان أساسية
- ✅ `tailwind.config.js` - إعدادات Tailwind

## ملاحظات
- الوضع الافتراضي هو Light Mode
- يتم حفظ الاختيار في localStorage
- الانتقال بين الأوضاع سلس مع transition
- جميع الألوان متناسقة ومريحة للعين
