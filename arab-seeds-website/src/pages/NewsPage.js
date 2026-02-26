import React from 'react';
import { Calendar, Mail, ChevronLeft } from 'lucide-react';
import Card from '../components/Card';
import Button from '../components/Button';

const newsList = [
  { title: 'نتائج الربع السنوي: أرقام قياسية في محاصيل الحبوب', date: '٢٠ أكتوبر ٢٠٢٥', tag: 'إنجازات' },
  { title: 'توقيع اتفاقية تعاون دولي لتطوير تقنيات إنتاج القمح', date: '١٥ أكتوبر ٢٠٢٥', tag: 'شراكة دولية' },
  { title: 'إطلاق مبادرة "بذور المستقبل" لدعم المزارعين العرب', date: '٠٥ أكتوبر ٢٠٢٥', tag: 'مبادرة جديدة' },
];

const NewsPage = () => (
  <div className="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4">
      <div className="h-64 bg-gradient-to-r from-amber-100 to-yellow-100 dark:from-[#2a2520] dark:to-[#2a2520] border border-amber-200 dark:border-[#332e27] rounded-2xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg">
        <div className="text-center z-10">
          <span className="text-yellow-600 dark:text-yellow-500 text-sm font-medium mb-2 inline-block">المنصة الرسمية</span>
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">المركز الإعلامي والأخبار الرسمية</h1>
          <p className="text-gray-700 dark:text-gray-300">نوافيكم بآخر المستجدات والابتكارات في عالم البذور والزراعة المستدامة في العالم العربي.</p>
        </div>
      </div>

      <div className="flex gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8 overflow-x-auto">
        {['أخبار المؤسسة', 'أخبار زراعية', 'بيانات صحفية', 'تقارير سنوية'].map((tab, idx) => (
          <button 
            key={idx} 
            className={`pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors ${
              idx === 0 
                ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500' 
                : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white'
            }`}
          >
            {tab}
          </button>
        ))}
      </div>

      <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
        {newsList.map((news, idx) => (
          <Card key={idx} className="p-0 overflow-hidden group hover:border-yellow-600 dark:hover:border-yellow-500/50">
            <div className="h-48 bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-[#1a1611] dark:to-[#1a1611] relative flex items-center justify-center text-gray-500 dark:text-gray-600">
              [صورة خبر]
              <span className="absolute top-4 right-4 bg-white/90 dark:bg-[#1c1813]/80 text-gray-900 dark:text-white text-xs px-2 py-1 rounded backdrop-blur-sm shadow-sm">
                {news.tag}
              </span>
            </div>
            <div className="p-6">
              <p className="text-yellow-600 dark:text-yellow-500 text-xs mb-2 flex items-center gap-1">
                <Calendar className="w-3 h-3" /> {news.date}
              </p>
              <h3 className="text-lg font-bold text-gray-900 dark:text-white mb-4 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors leading-snug">
                {news.title}
              </h3>
              <a href="#" className="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white flex items-center gap-1">
                اقرأ المزيد <ChevronLeft className="w-4 h-4" />
              </a>
            </div>
          </Card>
        ))}
      </div>
    </section>

    <section className="max-w-4xl mx-auto px-4">
      <Card className="text-center p-10 bg-gradient-to-b from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#1c1813] border-t-4 border-yellow-600 dark:border-yellow-500 shadow-xl">
        <div className="bg-yellow-100 dark:bg-yellow-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-yellow-600 dark:text-yellow-500">
          <Mail className="w-8 h-8" />
        </div>
        <h2 className="text-2xl font-bold text-gray-900 dark:text-white mb-2">سيتم نشر التحديثات الرسمية هنا قريباً</h2>
        <p className="text-gray-600 dark:text-gray-400 mb-8 max-w-lg mx-auto">
          نحن نعمل حالياً على إعداد تقارير مفصلة عن حصاد الموسم الحالي، اشترك في نشرتنا الإخبارية لتصلك آخر أخبار التحالف.
        </p>
        <form className="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
          <input 
            type="email" 
            placeholder="البريد الإلكتروني" 
            className="bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-2 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 flex-grow text-left dir-ltr" 
          />
          <Button type="button">اشترك الآن</Button>
        </form>
        <p className="text-xs text-gray-500 mt-4">نحترم خصوصيتك، لن نقوم بإرسال رسائل مزعجة أبداً.</p>
      </Card>
    </section>
  </div>
);

export default NewsPage;
