import React from 'react';
import { Leaf, CheckCircle } from 'lucide-react';
import Button from '../components/Button';
import Card from '../components/Card';

const ProductsPage = () => (
  <div className="space-y-20 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4 text-center">
      <span className="text-yellow-600 dark:text-yellow-500 text-sm font-medium">القسم الخاص</span>
      <h1 className="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mt-2 mb-4">
        منتجاتنا ومجالات <span className="text-yellow-600 dark:text-yellow-500">التميز</span>
      </h1>
      <p className="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
        نقدم حلولاً زراعية متكاملة بأعلى معايير الجودة العالمية لتعزيز الأمن الغذائي وتطوير القطاع الزراعي في المنطقة العربية.
      </p>
    </section>

    <section className="max-w-6xl mx-auto px-4">
      <div className="bg-gradient-to-r from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#2a2520] rounded-2xl overflow-hidden flex flex-col md:flex-row border border-gray-200 dark:border-[#332e27] shadow-lg">
        <div className="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
          <div className="inline-flex items-center gap-2 text-yellow-600 dark:text-yellow-500 mb-4 bg-yellow-100 dark:bg-yellow-500/10 w-fit px-3 py-1 rounded-full text-sm">
            <Leaf className="w-4 h-4" /> المنتج الرئيسي
          </div>
          <h2 className="text-3xl font-bold text-gray-900 dark:text-white mb-4">تقاوي البطاطس</h2>
          <p className="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
            نتميز بإنتاج واستيراد وتصدير أفضل أصناف تقاوي البطاطس المعتمدة عالمياً. تركيزنا ينصب على توفير 
            سلالات ذات إنتاجية عالية ومقاومة للأمراض لضمان أفضل عائد للمزارع.
          </p>
          <ul className="space-y-3 mb-8">
            <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
              <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> استيراد أصناف أوروبية عالية الجودة
            </li>
            <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
              <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> محطات فرز وتعبئة متطورة
            </li>
            <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
              <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> تخزين في ثلاجات حديثة لضمان الحيوية
            </li>
          </ul>
          <Button className="w-fit">اطلب عرض سعر</Button>
        </div>
        <div className="md:w-1/2 bg-amber-100 dark:bg-[#1a1611]">
          <img 
            src="/images/potato2.jpg" 
            alt="تقاوي البطاطس" 
            className="w-full h-full object-cover"
          />
        </div>
      </div>
    </section>

    <section className="max-w-6xl mx-auto px-4">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {[
          { title: 'البذور والتقاوي الزراعية', desc: 'توفير مجموعة واسعة من بذور الخضروات والمحاصيل الحقلية بأعلى معدلات الإنبات.', img: '/images/p1.png' },
          { title: 'الأسمدة والمخصبات', desc: 'حلول تسميد متكاملة تشمل الأسمدة المركبة والمعدنية والمخصبات الحيوية.', img: '/images/p2.png' },
          { title: 'الحاصلات الزراعية', desc: 'تخزين وتصدير الحاصلات الزراعية الطازجة وفقاً للمواصفات العالمية.', img: '/images/p3.jpg' },
          { title: 'مستلزمات شبكات الري', desc: 'توريد كافة قطع الغيار والحلول ومستلزمات الشبكات لترشيد المياه.', img: './images/p4.jpg' },
          { title: 'الإنتاج الحيواني والداجني', desc: 'توفير الأعلاف والإضافات الغذائية ومستلزمات المزارع لزيادة الإنتاج.', img: './images/p5.png' },
          { title: 'الاستشارات الزراعية', desc: 'تقديم الدعم الفني والاستشارات المتخصصة للمزارعين والمستثمرين.', img: './images/p6.png' },
        ].map((item, idx) => (
          <Card key={idx} className="p-0 overflow-hidden flex flex-col group">
            <div className="h-40 bg-amber-100 dark:bg-[#1a1611] flex items-center justify-center text-gray-500 dark:text-gray-600 border-b border-gray-200 dark:border-[#332e27]">
              {item.img ? (
                <img 
                  src={item.img} 
                  alt={item.title} 
                  className="w-full h-full object-cover"
                />
              ) : (
                '[صورة منتج]'
              )}
            </div>
            <div className="p-5 flex flex-col flex-grow">
              <h3 className="text-lg font-bold text-gray-900 dark:text-white mb-2">{item.title}</h3>
              <p className="text-gray-600 dark:text-gray-400 text-sm mb-4 flex-grow">{item.desc}</p>
              <Button variant="outline" className="w-full text-sm py-1.5">
                تواصل مع المبيعات
              </Button>
            </div>
          </Card>
        ))}
      </div>
    </section>

    <section className="max-w-6xl mx-auto px-4">
      <div className="bg-gradient-to-r from-yellow-50 to-amber-50 dark:from-[#2a2520] dark:to-[#2a2520] border border-gray-200 dark:border-[#332e27] rounded-xl p-8 flex flex-col md:flex-row justify-between items-center gap-6 shadow-lg">
        <div>
          <h3 className="text-2xl font-bold text-gray-900 dark:text-white mb-2">هل تبحث عن شريك استراتيجي لمشروعك؟</h3>
          <p className="text-gray-700 dark:text-gray-400">
            فريق خبرائنا جاهز لمساعدتك في اختيار أفضل المنتجات والحلول التي تناسب احتياجاتك وتضمن نجاح موسمك الزراعي.
          </p>
        </div>
        <div className="flex gap-4 shrink-0">
          <Button>تواصل معنا الآن</Button>
          <Button variant="dark">تصفح المشاريع</Button>
        </div>
      </div>
    </section>
  </div>
);

export default ProductsPage;
