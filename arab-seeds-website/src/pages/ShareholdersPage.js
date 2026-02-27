import React from 'react';
import { Shield } from 'lucide-react';
import Card from '../components/Card';
import SectionTitle from '../components/SectionTitle';

const boardMembers = [
  { name: 'المحاسب / أحمد شوقي محمد السيد منتصر', role: 'رئيس مجلس الإدارة والعضو المنتدب', entity: 'ممثلاً عن الشركة الدولية للمحاصيل الزراعية' },
  { name: 'المحاسب / نافع فهمي فهمي عبد المجيد', role: 'نائب رئيس مجلس الإدارة - غير تنفيذي', entity: 'ممثلاً عن شركة الصفا إنترناشيونال جروب' },
  { name: 'المهندس / محمد سالم احمد سلامة', role: 'نائب رئيس مجلس الإدارة والعضو المنتدب', entity: 'نفسه' },
  { name: 'الأستاذ / محمد سعيد حسين خليل السيسي', role: 'عضو مجلس إدارة', entity: 'ممثلاً عن البنك الزراعي المصري' },
  { name: 'الأستاذ / احمد محمد مصطفى عبد العزيز الحصري', role: 'عضو مجلس إدارة', entity: 'ممثلاً عن شركة طيبة للتجارة والتوكيلات' },
  { name: 'الأستاذ / إبراهيم حسن إبراهيم الحديدي', role: 'عضو مجلس إدارة', entity: 'ممثلاً عن الشركة الزراعية المصرية لإنتاج التقاوي' },
  { name: 'أ.د/ احمد حلمي حسين خلف جامع', role: 'عضو مجلس إدارة', entity: 'ممثلاً عن الوحدة البحثية بمعهد بحوث البساتين' },
];

const ShareholdersPage = () => (
  <div className="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4">
      <div className="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style={{ backgroundImage: 'url(https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1200)' }}>
        <div className="absolute inset-0 bg-black/50 z-10"></div>
        <div className="z-20 text-center px-4">
          <h1 className="text-4xl font-bold text-white mb-4">هيكل المساهمين ومجلس الإدارة الرسمي</h1>
          <p className="text-gray-100 max-w-2xl mx-auto">
            البيانات المؤسسية وحوكمة التحالف العربي لإنتاج التقاوي. نلتزم بأعلى معايير الشفافية في إدارة استثماراتنا الزراعية.
          </p>
        </div>
      </div>
    </section>

    <section className="max-w-6xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div className="lg:col-span-2">
        <div className="flex justify-between items-center mb-6">
          <h2 className="text-2xl font-bold text-gray-900 dark:text-white">سجل المساهمين التفصيلي</h2>
          <span className="bg-amber-100 dark:bg-[#2a2520] text-gray-700 dark:text-gray-400 text-xs px-3 py-1 rounded border border-gray-200 dark:border-[#332e27] shadow-sm">
            السنة المالية 2025
          </span>
        </div>
        <div className="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] overflow-hidden shadow-lg">
          <table className="w-full text-sm text-right">
            <thead className="bg-amber-100 dark:bg-[#2a2520]">
              <tr>
                <th className="p-4 text-gray-700 dark:text-gray-300 font-medium">المساهم</th>
                <th className="p-4 text-gray-700 dark:text-gray-300 font-medium text-center">عدد الأسهم</th>
                <th className="p-4 text-gray-700 dark:text-gray-300 font-medium text-center">النسبة المئوية</th>
              </tr>
            </thead>
            <tbody className="divide-y divide-gray-200 dark:divide-[#332e27]">
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">الشركة الدولية للمحاصيل الزراعية</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">201,000,000</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">32.82%</td>
              </tr>
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">الصفا انترناشيونال جروب</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">130,809,000</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">21.36%</td>
              </tr>
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">الشركة المصرية الفرنسية للزراعات النسيجية</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">63,000,000</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">10.29%</td>
              </tr>
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">البنك الزراعي المصري</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">75,000,000</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">12.24%</td>
              </tr>
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">شركة طيبة للتجارة والتوكيلات</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">68,518,500</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">11.19%</td>
              </tr>
              <tr className="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                <td className="p-4 text-gray-900 dark:text-white">مساهمون آخرون</td>
                <td className="p-4 text-gray-600 dark:text-gray-400 text-center">74,172,500</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">12.10%</td>
              </tr>
              <tr className="bg-yellow-100 dark:bg-[#2a2520] font-bold">
                <td className="p-4 text-gray-900 dark:text-white">الإجمالي الكلي</td>
                <td className="p-4 text-gray-900 dark:text-white text-center">612,500,000</td>
                <td className="p-4 text-yellow-600 dark:text-yellow-500 text-center">100%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div className="lg:col-span-1">
        <Card className="h-full flex flex-col items-center justify-center text-center">
          <h3 className="text-xl font-bold text-gray-900 dark:text-white mb-8">توزيع الحصص الكلية</h3>
          <div className="relative w-48 h-48 rounded-full border-[16px] border-gray-200 dark:border-[#332e27] flex items-center justify-center mb-8 shadow-inner">
            <div className="text-center z-10">
              <span className="text-3xl font-bold text-gray-900 dark:text-white block">100%</span>
              <span className="text-xs text-gray-500">إجمالي الأسهم</span>
            </div>
          </div>
          <ul className="text-sm space-y-2 text-right w-full text-gray-700 dark:text-gray-300">
            <li className="flex items-center gap-2">
              <span className="w-3 h-3 rounded-full bg-yellow-600 dark:bg-yellow-500"></span>
              الشركة الدولية للمحاصيل (32.82%)
            </li>
            <li className="flex items-center gap-2">
              <span className="w-3 h-3 rounded-full bg-gray-400"></span>
              الصفا انترناشيونال (21.36%)
            </li>
            <li className="flex items-center gap-2">
              <span className="w-3 h-3 rounded-full bg-gray-300 dark:bg-[#332e27]"></span>
              مساهمون آخرون (45.82%)
            </li>
          </ul>
        </Card>
      </div>
    </section>

    <section className="max-w-6xl mx-auto px-4">
      <SectionTitle 
        title="مجلس الإدارة" 
        subtitle="القيادة الاستراتيجية التي توجه مسيرة التحالف نحو النمو المستدام" 
        className="mb-10" 
      />
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {boardMembers.map((member, idx) => (
          <Card key={idx} className={`text-center py-8 ${idx === 0 ? 'border-yellow-600 dark:border-yellow-500/50 bg-amber-50 dark:bg-[#2a2520]' : ''}`}>
            <h3 className={`font-bold mb-1 ${idx === 0 ? 'text-yellow-600 dark:text-yellow-500 text-xl' : 'text-gray-900 dark:text-white text-lg'}`}>
              {member.name}
            </h3>
            <p className="text-gray-700 dark:text-gray-300 text-sm mb-2">{member.role}</p>
            <p className="text-gray-500 text-xs">{member.entity}</p>
          </Card>
        ))}
      </div>

      <div className="mt-8 bg-yellow-50 dark:bg-yellow-500/10 border border-yellow-200 dark:border-yellow-500/30 rounded-lg p-6 flex items-start gap-4 shadow-sm">
        <Shield className="w-8 h-8 text-yellow-600 dark:text-yellow-500 shrink-0" />
        <div>
          <h4 className="text-yellow-600 dark:text-yellow-500 font-bold mb-1">ميثاق الحوكمة</h4>
          <p className="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
            يتم اختيار أعضاء مجلس الإدارة وفقاً لمعايير الكفاءة والخبرة الطويلة في القطاع الزراعي والاستثماري. 
            يلتزم المجلس بعقد اجتماعات دورية لضمان توافق العمليات مع أهداف الأمن الغذائي العربي المستدام.
          </p>
        </div>
      </div>
    </section>
  </div>
);

export default ShareholdersPage;
