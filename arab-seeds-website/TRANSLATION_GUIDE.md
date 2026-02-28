# دليل الترجمة - Translation Guide

## نظرة عامة
تم تطبيق نظام ترجمة كامل للموقع باستخدام مكتبة `react-i18next` لدعم اللغتين العربية والإنجليزية.

## الملفات المحدثة

### 1. ملفات الترجمة
- `src/translations/ar.json` - الترجمة العربية
- `src/translations/en.json` - الترجمة الإنجليزية
- `src/i18n.js` - إعدادات i18next

### 2. المكونات المحدثة
- `src/components/Header.js` - إضافة زر تبديل اللغة
- `src/components/Footer.js` - ترجمة كاملة
- `src/pages/HomePage.js` - ترجمة كاملة
- `src/pages/ProductsPage.js` - ترجمة كاملة
- `src/pages/ProjectsPage.js` - ترجمة كاملة
- `src/pages/NewsPage.js` - ترجمة كاملة

### 3. الصفحات المتبقية (تحتاج ترجمة)
- `src/pages/AboutPage.js`
- `src/pages/ContactPage.js`
- `src/pages/InvestorsPage.js`
- `src/pages/ShareholdersPage.js`

## كيفية الاستخدام

### تبديل اللغة
- يوجد زر في الـ Header (أيقونة Globe + نص اللغة)
- الضغط عليه يبدل بين العربية والإنجليزية
- يتغير اتجاه الصفحة تلقائياً (RTL/LTR)

### إضافة ترجمات جديدة

1. أضف النص في ملفات الترجمة:
```json
// ar.json
{
  "section": {
    "key": "النص بالعربية"
  }
}

// en.json
{
  "section": {
    "key": "Text in English"
  }
}
```

2. استخدم الترجمة في المكون:
```javascript
import { useTranslation } from 'react-i18next';

const MyComponent = () => {
  const { t } = useTranslation();
  
  return <h1>{t('section.key')}</h1>;
};
```

## المكتبات المستخدمة
- `react-i18next` - React bindings for i18next
- `i18next` - Internationalization framework
- `i18next-browser-languagedetector` - Language detection

## الميزات
✅ تبديل سلس بين اللغات
✅ تغيير اتجاه الصفحة تلقائياً (RTL/LTR)
✅ حفظ اللغة المختارة في المتصفح
✅ ترجمة شاملة للصفحات الرئيسية
✅ دعم كامل للـ Dark Mode مع الترجمة

## ملاحظات
- اللغة الافتراضية: العربية
- يتم حفظ اختيار اللغة في localStorage
- جميع النصوص الثابتة تم نقلها لملفات الترجمة
