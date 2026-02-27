import React from 'react';
import { Calendar, Briefcase, Leaf, Droplet, Shield, TrendingUp, Users } from 'lucide-react';
import Button from '../components/Button';
import Card from '../components/Card';
import SectionTitle from '../components/SectionTitle';

const businessSectors = [
  { 
    icon: <Leaf className="w-8 h-8" />, 
    title: 'تقاوي البطاطس', 
    desc: 'إنتاج وتوزيع أفضل الأصناف العالمية بأعلى إنتاجية ومقاومة للأمراض.' 
  },
  { 
    icon: <Droplet className="w-8 h-8" />, 
    title: 'الأسمدة', 
    desc: 'حلول تغذية النبات المتكاملة والمصممة خصيصاً لمختلف أنواع التربة.' 
  },
  { 
    icon: <Shield className="w-8 h-8" />, 
    title: 'نظم الري', 
    desc: 'تقنيات الري الحديثة والذكية لترشيد استهلاك المياه وزيادة الكفاءة.' 
  },
  { 
    icon: <TrendingUp className="w-8 h-8" />, 
    title: 'المبيدات', 
    desc: 'وقاية المحاصيل الفعالة باستخدام أحدث المبيدات الآمنة بيئياً.' 
  },
  { 
    icon: <Leaf className="w-8 h-8" />, 
    title: 'التقاوي المحسنة', 
    desc: 'تطوير السلالات المحلية لضمان الاكتفاء الذاتي من التقاوي عالية الجودة.' 
  },
  { 
    icon: <Users className="w-8 h-8" />, 
    title: 'الاستشارات الزراعية', 
    desc: 'خبرات فنية متخصصة وفريق دعم ميداني لضمان نجاح المزارعين.' 
  },
];

const HomePage = ({ navigate }) => (
  <div className="space-y-20 pb-20 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    {/* Hero Section */}
    <section className="relative pt-32 pb-20 text-center px-4 bg-cover bg-center bg-no-repeat" style={{ backgroundImage: 'url(/images/img1.jpeg)' }}>
      {/* Overlay for better text readability */}
      <div className="absolute inset-0 bg-black/50"></div>
      
      <div className="relative z-10 max-w-4xl mx-auto space-y-6">
        <h3 className="text-yellow-400 font-medium tracking-wide">التميز في الإنتاج الزراعي</h3>
        <h1 className="text-5xl md:text-7xl font-bold text-white leading-tight">
          التحالف العربي لإنتاج التقاوي
        </h1>
        <p className="text-xl text-gray-100 max-w-2xl mx-auto">
          نعمل على تطوير الإنتاج الزراعي بأعلى المعايير العالمية وتقنيات إنتاج التقاوي المتطورة لدعم الأمن الغذائي المستدام.
        </p>
        <div className="flex justify-center gap-4 pt-6">
          <Button onClick={() => navigate('about')}>عن الشركة</Button>
          <Button variant="dark" onClick={() => navigate('investors')}>
            علاقات المستثمرين
          </Button>
        </div>
      </div>
    </section>

    {/* Info Cards */}
    <section className="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
      <Card className="flex items-center justify-between">
        <div>
          <p className="text-gray-500 dark:text-gray-400 text-sm">سنة التأسيس</p>
          <p className="text-3xl font-bold text-gray-900 dark:text-white mt-1">2024</p>
        </div>
        <div className="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
          <Calendar className="w-8 h-8" />
        </div>
      </Card>
      <Card className="flex items-center justify-between">
        <div>
          <p className="text-gray-500 dark:text-gray-400 text-sm">الشكل القانوني</p>
          <p className="text-3xl font-bold text-gray-900 dark:text-white mt-1">شركة مساهمة</p>
        </div>
        <div className="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
          <Briefcase className="w-8 h-8" />
        </div>
      </Card>
    </section>

    {/* Business Sectors */}
    <section className="max-w-6xl mx-auto px-4">
      <SectionTitle title="قطاعات الأعمال" subtitle="ماذا نقدم" />
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {businessSectors.map((sector, idx) => (
          <Card key={idx} className="text-center group">
            <div className="text-yellow-600 dark:text-yellow-500 flex justify-center mb-4 transform group-hover:scale-110 transition-transform">
              {sector.icon}
            </div>
            <h3 className="text-xl font-bold text-gray-900 dark:text-white mb-2">{sector.title}</h3>
            <p className="text-gray-600 dark:text-gray-400 text-sm">{sector.desc}</p>
          </Card>
        ))}
      </div>
    </section>

    {/* Financial Indicators */}
    <section className="max-w-6xl mx-auto px-4 pt-10 border-t border-gray-200 dark:border-[#332e27]">
      <SectionTitle title="المؤشرات المالية الرئيسية" subtitle="الأداء المالي" />
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        {[
          { label: 'صافي الربح الحالي', value: '7.17M', unit: 'ج.م', sub: 'نمو إيجابي' },
          { label: 'صافي الربح المستهدف', value: '9.22M', unit: 'ج.م', sub: 'خطة العام القادم' },
          { label: 'إجمالي الأصول', value: '779M', unit: 'ج.م', sub: 'أصول ثابتة ومتداولة' },
          { label: 'رأس المال', value: '612.5M', unit: 'ج.م', sub: 'مدفوع بالكامل' },
        ].map((stat, idx) => (
          <div key={idx} className="border-r border-gray-200 dark:border-[#332e27] last:border-0 px-4">
            <p className="text-gray-500 dark:text-gray-400 text-sm mb-2">{stat.label}</p>
            <p className="text-4xl font-bold text-gray-900 dark:text-white mb-1">
              {stat.value} <span className="text-lg text-yellow-600 dark:text-yellow-500">{stat.unit}</span>
            </p>
            <p className="text-xs text-gray-500 flex justify-center items-center gap-1">
              {idx === 0 && <TrendingUp className="w-3 h-3 text-green-500" />}
              {stat.sub}
            </p>
          </div>
        ))}
      </div>
    </section>
  </div>
);

export default HomePage;
