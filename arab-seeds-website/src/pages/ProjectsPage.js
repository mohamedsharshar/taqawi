import React from 'react';
import { ChevronLeft } from 'lucide-react';
import Card from '../components/Card';

const projectsList = [
  { 
    title: 'تطوير نظم الري الذكي', 
    desc: 'استخدام الذكاء الاصطناعي في ترشيد المياه وزيادة كفاءة الري.', 
    status: 'تحت التنفيذ',
    img: 'https://images.pexels.com/photos/2132250/pexels-photo-2132250.jpeg?auto=compress&cs=tinysrgb&w=800'
  },
  { 
    title: 'مشروع استصلاح الأراضي الصحراوية', 
    desc: 'تحويل الصحراء إلى رقعة خضراء منتجة باستخدام أحدث التقنيات.', 
    status: 'قيد التخطيط',
    img: './images/desert2png.png'
  },
  { 
    title: 'مشروع الصوبات الزراعية الحديثة', 
    desc: 'زيادة الإنتاجية من خلال الزراعة المحمية والمتحكم بها.', 
    status: 'تحت التنفيذ',
    img: './images/sob.jpg'
  },
  { 
    title: 'مشروع الزراعة العمودية', 
    desc: 'حلول زراعية مبتكرة للمناطق الحضرية المكتظة بالسكان.', 
    status: 'مستقبلي',
    img: 'https://images.pexels.com/photos/6231818/pexels-photo-6231818.jpeg?auto=compress&cs=tinysrgb&w=800'
  },
  { 
    title: 'مجمع إنتاج التقاوي المحسنة', 
    desc: 'إنتاج سلالات محلية عالية الجودة للمزارعين العرب.', 
    status: 'تحت التنفيذ',
    img: './images/taq.jpg'
  },
  { 
    title: 'مشروع المراقبة بالدرون', 
    desc: 'مراقبة المحاصيل وتحليل البيانات باستخدام الطائرات المسيرة.', 
    status: 'تقني',
    img: 'https://images.pexels.com/photos/442587/pexels-photo-442587.jpeg?auto=compress&cs=tinysrgb&w=800'
  },
];

const ProjectsPage = () => (
  <div className="space-y-12 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4 text-center">
      <h1 className="text-4xl font-bold text-gray-900 dark:text-white mb-4">المشروعات</h1>
      <p className="text-gray-600 dark:text-gray-400">مشاريعنا الاستراتيجية لتعزيز الأمن الغذائي</p>
    </section>

    <section className="max-w-6xl mx-auto px-4">
      <div className="flex justify-center gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8">
        {['الكل', 'مشاريع تحت التنفيذ', 'مشاريع مستقبلية'].map((tab, idx) => (
          <button 
            key={idx} 
            className={`pb-3 px-2 font-medium text-sm transition-colors ${
              idx === 0 
                ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500' 
                : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white'
            }`}
          >
            {tab}
          </button>
        ))}
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {projectsList.map((project, idx) => (
          <Card key={idx} className="p-0 overflow-hidden group">
            <div className="relative h-48 bg-amber-100 dark:bg-[#1a1611]">
              <img 
                src={project.img} 
                alt={project.title} 
                className="w-full h-full object-cover"
              />
              <span className="absolute top-4 right-4 bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black text-xs font-bold px-2 py-1 rounded shadow-lg">
                {project.status}
              </span>
            </div>
            <div className="p-6">
              <h3 className="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors">
                {project.title}
              </h3>
              <p className="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3">{project.desc}</p>
              <button className="text-yellow-600 dark:text-yellow-500 text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all">
                التفاصيل <ChevronLeft className="w-4 h-4" />
              </button>
            </div>
          </Card>
        ))}
      </div>
    </section>
  </div>
);

export default ProjectsPage;
