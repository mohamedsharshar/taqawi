# 🖼️ كيفية إضافة الصور للموقع

## 📁 الخطوة 1: إنشاء مجلد الصور

```bash
mkdir public/images
```

## 📸 الخطوة 2: إضافة الصور

ضع صورك في مجلد `public/images/`

مثال:
```
public/
  images/
    logo.png
    potato-seeds.jpg
    project1.jpg
    news1.jpg
    ...
```

## 💻 الخطوة 3: استخدام الصور في الكود

### في المكونات (Components)

```jsx
// مثال: إضافة صورة في ProductsPage
<div className="md:w-1/2 bg-[#1a1611] flex items-center justify-center p-8">
  <img 
    src="/images/potato-seeds.jpg" 
    alt="تقاوي البطاطس" 
    className="w-64 h-64 rounded-full object-cover border-4 border-[#2a2520] shadow-2xl"
  />
</div>
```

### في الصفحة الرئيسية

```jsx
// استبدل النص [صورة بطاطس] بصورة حقيقية
<img 
  src="/images/hero-image.jpg" 
  alt="التحالف العربي" 
  className="w-full h-full object-cover"
/>
```

## 🎨 أمثلة للصور المطلوبة

### 1. الصفحة الرئيسية
- `hero-background.jpg` - صورة خلفية رئيسية
- `sector-seeds.jpg` - قطاع التقاوي
- `sector-fertilizers.jpg` - قطاع الأسمدة
- `sector-irrigation.jpg` - قطاع الري

### 2. صفحة المنتجات
- `potato-seeds-main.jpg` - تقاوي البطاطس الرئيسية
- `product-seeds.jpg` - البذور
- `product-fertilizers.jpg` - الأسمدة
- `product-irrigation.jpg` - نظم الري

### 3. صفحة المشروعات
- `project-smart-irrigation.jpg` - نظم الري الذكي
- `project-desert-reclamation.jpg` - استصلاح الأراضي
- `project-greenhouses.jpg` - الصوبات الزراعية
- `project-vertical-farming.jpg` - الزراعة العمودية

### 4. صفحة الأخبار
- `news-1.jpg` - خبر 1
- `news-2.jpg` - خبر 2
- `news-3.jpg` - خبر 3

### 5. صفحة عن الشركة
- `company-building.jpg` - مبنى الشركة
- `team-photo.jpg` - صورة الفريق
- `timeline-bg.jpg` - خلفية الجدول الزمني

## 🔄 استبدال النصوص بالصور

### قبل:
```jsx
<div className="w-64 h-64 bg-[#332e27] rounded-full flex items-center justify-center text-gray-500">
  [صورة بطاطس]
</div>
```

### بعد:
```jsx
<img 
  src="/images/potato-seeds.jpg" 
  alt="تقاوي البطاطس عالية الجودة" 
  className="w-64 h-64 rounded-full object-cover"
/>
```

## 📐 مقاسات الصور الموصى بها

| الموقع | العرض × الارتفاع | الملاحظات |
|--------|------------------|-----------|
| صورة Hero | 1920 × 1080 | صورة عريضة |
| صور المنتجات | 800 × 800 | مربعة |
| صور المشاريع | 1200 × 800 | أفقية |
| صور الأخبار | 1200 × 800 | أفقية |
| الشعار | 512 × 512 | شفاف PNG |
| أيقونات | 256 × 256 | شفاف PNG |

## 🎯 نصائح مهمة

1. **استخدم صور عالية الجودة** (لكن ليست كبيرة جداً)
2. **ضغط الصور** قبل رفعها (استخدم TinyPNG أو مشابه)
3. **استخدم أسماء واضحة** للصور (بالإنجليزية)
4. **أضف alt text** لكل صورة (للوصول وSEO)
5. **استخدم WebP** للصور الحديثة (أصغر حجماً)

## 🔧 أدوات مفيدة

- **ضغط الصور**: [TinyPNG](https://tinypng.com/)
- **تحويل إلى WebP**: [Squoosh](https://squoosh.app/)
- **تعديل الصور**: [Photopea](https://www.photopea.com/)
- **صور مجانية**: [Unsplash](https://unsplash.com/), [Pexels](https://www.pexels.com/)

## 📝 مثال كامل

```jsx
// في ProductsPage.js
import React from 'react';

const ProductsPage = () => (
  <div className="space-y-20 pb-20 pt-10">
    {/* Hero Section مع صورة */}
    <section className="relative h-96 overflow-hidden">
      <img 
        src="/images/products-hero.jpg" 
        alt="منتجات التحالف العربي" 
        className="w-full h-full object-cover"
      />
      <div className="absolute inset-0 bg-black/50 flex items-center justify-center">
        <h1 className="text-5xl font-bold text-white">منتجاتنا</h1>
      </div>
    </section>

    {/* قسم المنتجات مع صور */}
    <section className="max-w-6xl mx-auto px-4">
      <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div className="bg-[#221e1a] rounded-lg overflow-hidden">
          <img 
            src="/images/product-seeds.jpg" 
            alt="البذور والتقاوي" 
            className="w-full h-48 object-cover"
          />
          <div className="p-6">
            <h3 className="text-xl font-bold text-white mb-2">
              البذور والتقاوي
            </h3>
            <p className="text-gray-400 text-sm">
              أفضل أنواع البذور عالية الجودة
            </p>
          </div>
        </div>
        {/* المزيد من المنتجات... */}
      </div>
    </section>
  </div>
);

export default ProductsPage;
```

## 🎨 تنسيقات CSS للصور

```css
/* صورة دائرية */
.rounded-image {
  border-radius: 50%;
  object-fit: cover;
}

/* صورة مع ظل */
.shadow-image {
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

/* صورة مع تأثير hover */
.hover-image {
  transition: transform 0.3s ease;
}

.hover-image:hover {
  transform: scale(1.05);
}

/* صورة مع overlay */
.overlay-image {
  position: relative;
}

.overlay-image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.7));
}
```

---

**ملاحظة**: بعد إضافة الصور، قد تحتاج لإعادة تشغيل المشروع (Ctrl+C ثم npm start)
