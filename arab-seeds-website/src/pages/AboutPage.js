import React from 'react';
import { CheckCircle, Briefcase, Download } from 'lucide-react';
import Card from '../components/Card';

const timelineEvents = [
  { date: 'يناير 2024', title: '100 مليون ج.م', desc: 'رأس المال عند التأسيس' },
  { date: 'أغسطس 2024', title: '125 مليون ج.م', desc: 'زيادة رأس المال الأولى' },
  { date: 'يناير 2025', title: '236.5 مليون ج.م', desc: 'التوسع الاستراتيجي' },
  { date: 'يوليو 2025', title: '338 مليون ج.م', desc: 'الاستحواذات والتطوير' },
  { date: 'سبتمبر 2025', title: '350.5 مليون ج.م', desc: 'توسعة خطوط الإنتاج' },
  { date: 'ديسمبر 2025', title: '612.5 مليون ج.م', desc: 'رأس المال الحالي' },
];

const AboutPage = () => (
  <div className="space-y-20 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4">
      <div className="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style={{ backgroundImage: 'url(https://images.pexels.com/photos/1595104/pexels-photo-1595104.jpeg?auto=compress&cs=tinysrgb&w=1200)' }}>
        <div className="absolute inset-0 bg-black/50 z-10"></div>
        <div className="z-20 text-center">
          <span className="bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black px-3 py-1 text-xs font-bold rounded mb-4 inline-block">
            عن الشركة
          </span>
          <h1 className="text-4xl md:text-5xl font-bold text-white">مسيرة النمو والتطور</h1>
        </div>
      </div>

      <div className="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <div className="lg:col-span-1">
          <div className="bg-gradient-to-br from-yellow-500 to-yellow-600 dark:from-yellow-500 dark:to-yellow-600 rounded-lg p-6 text-white dark:text-black sticky top-24 shadow-xl">
            <h3 className="text-xl font-bold mb-6 border-b border-white/20 dark:border-black/10 pb-4">قيمنا الجوهرية</h3>
            <ul className="space-y-4 font-medium">
              <li className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 shrink-0 mt-0.5" />
                <span>الجودة: الالتزام بأعلى معايير الإنتاج الزراعي.</span>
              </li>
              <li className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 shrink-0 mt-0.5" />
                <span>الاستدامة: دعم المزارعين لضمان مستقبل أفضل.</span>
              </li>
              <li className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 shrink-0 mt-0.5" />
                <span>الموثوقية: الريادة في السوق العربي الإقليمي.</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="lg:col-span-2 space-y-12">
          <div>
            <h2 className="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
              <div className="w-2 h-8 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
              تأسيس الشركة وهويتنا
            </h2>
            <p className="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
              تأسست الشركة في 10 يناير 2024 ككيان رائد يهدف إلى تعزيز الأمن الغذائي القومي والسيادة الزراعية. 
              انطلقت مسيرتنا برؤية طموحة لسد الفجوة في إنتاج التقاوي عالية الجودة، وفقاً لأحكام القانون رقم 159 لسنة 1981.
            </p>
            <div className="bg-amber-50 dark:bg-[#2a2520] border-r-4 border-yellow-600 dark:border-yellow-500 p-6 rounded-l-lg italic text-gray-700 dark:text-gray-300 shadow-sm">
              "في أكتوبر 2025، تم تغيير المسمى الرسمي إلى 'التحالف العربي لإنتاج التقاوي' ليعكس رؤيتنا التوسعية الجديدة 
              وطموحنا في قيادة القطاع الزراعي على مستوى المنطقة العربية."
            </div>
          </div>

          <Card>
            <div className="flex items-start gap-4">
              <div className="bg-yellow-100 dark:bg-yellow-500/10 p-3 rounded-full text-yellow-600 dark:text-yellow-500">
                <Briefcase className="w-6 h-6" />
              </div>
              <div>
                <h3 className="text-lg font-bold text-gray-900 dark:text-white mb-2">الوضع القانوني والاعتماد</h3>
                <p className="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-4">
                  تعمل الشركة وفقاً لأحكام القانون رقم 159 لسنة 1981 ولائحته التنفيذية كشركة مساهمة مصرية، 
                  ملتزمة بأعلى معايير الحوكمة والشفافية القانونية. تم قيدها بالسجل التجاري تحت رقم 223869.
                </p>
                <button className="text-yellow-600 dark:text-yellow-500 text-sm hover:underline flex items-center gap-1">
                  تحميل السجل التجاري والمستندات <Download className="w-4 h-4" />
                </button>
              </div>
            </div>
          </Card>

          <div className="pt-8 border-t border-gray-200 dark:border-[#332e27]">
            <h2 className="text-2xl font-bold text-gray-900 dark:text-white text-center mb-2">تطور رأس المال</h2>
            <p className="text-center text-gray-600 dark:text-gray-400 mb-10 text-sm">
              نظرة على نمو القيمة المالية للشركة من التأسيس حتى 2025
            </p>
            <div className="relative">
              <div className="absolute right-1/2 w-0.5 h-full bg-gray-200 dark:bg-[#332e27] transform translate-x-1/2"></div>
              {timelineEvents.map((event, idx) => (
                <div 
                  key={idx} 
                  className={`flex items-center justify-between mb-8 w-full ${
                    idx % 2 === 0 ? 'flex-row-reverse' : ''
                  }`}
                >
                  <div className="w-5/12"></div>
                  <div className="w-2/12 flex justify-center relative z-10">
                    <div className={`w-4 h-4 rounded-full ${
                      idx === timelineEvents.length - 1 
                        ? 'bg-yellow-600 dark:bg-yellow-500 w-6 h-6 border-4 border-white dark:border-[#1c1813] shadow-lg' 
                        : 'bg-yellow-400 dark:bg-yellow-500/50'
                    }`}></div>
                  </div>
                  <div className={`w-5/12 ${idx % 2 === 0 ? 'text-left pl-8' : 'text-right pr-8'}`}>
                    <p className="text-sm text-gray-500 font-medium mb-1">{event.date}</p>
                    <div className={`p-4 rounded-lg border shadow-sm ${
                      idx === timelineEvents.length - 1 
                        ? 'bg-gradient-to-br from-yellow-500 to-yellow-600 border-yellow-600 shadow-lg' 
                        : 'bg-white dark:bg-[#221e1a] border-gray-200 dark:border-[#332e27]'
                    }`}>
                      <h4 className={`font-bold ${
                        idx === timelineEvents.length - 1 
                          ? 'text-white dark:text-black text-xl' 
                          : 'text-yellow-600 dark:text-yellow-500 text-lg'
                      }`}>
                        {event.title}
                      </h4>
                      <p className={`text-sm mt-1 ${
                        idx === timelineEvents.length - 1 
                          ? 'text-white/90 dark:text-black/80' 
                          : 'text-gray-600 dark:text-gray-400'
                      }`}>
                        {event.desc}
                      </p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
);

export default AboutPage;
