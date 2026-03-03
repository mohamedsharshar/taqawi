<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $timeline = [
            ['date' => $locale == 'ar' ? 'يناير 2024' : 'January 2024', 'title' => '100 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'رأس المال عند التأسيس' : 'Capital at Establishment'],
            ['date' => $locale == 'ar' ? 'أغسطس 2024' : 'August 2024', 'title' => '108 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'زيادة رأس المال الأولى' : 'First Capital Increase'],
            ['date' => $locale == 'ar' ? 'أغسطس 2024' : 'August 2024', 'title' => '125 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'التوسع الاستراتيجي' : 'Strategic Expansion'],
            ['date' => $locale == 'ar' ? 'يناير 2025' : 'January 2025', 'title' => '236.5 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'التوسع الاستراتيجي' : 'Strategic Expansion'],
            ['date' => $locale == 'ar' ? 'يوليو 2025' : 'July 2025', 'title' => '338 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'الاستحواذات والتطوير' : 'Acquisitions and Development'],
            ['date' => $locale == 'ar' ? 'سبتمبر 2025' : 'September 2025', 'title' => '350.5 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'توسعة خطوط الإنتاج' : 'Production Lines Expansion'],
            ['date' => $locale == 'ar' ? 'ديسمبر 2025' : 'December 2025', 'title' => '612.5 ' . ($locale == 'ar' ? 'مليون ج.م' : 'Million EGP'), 'desc' => $locale == 'ar' ? 'رأس المال الحالي' : 'Current Capital'],
        ];
        
        $data = [
            'title' => $locale == 'ar' ? 'عن الشركة' : 'About Us',
            'hero' => [
                'tag' => $locale == 'ar' ? 'عن الشركة' : 'About Us',
                'title' => $locale == 'ar' ? 'مسيرة النمو والتطور' : 'Journey of Growth and Development',
            ],
            'values' => [
                'title' => $locale == 'ar' ? 'قيمنا الجوهرية' : 'Our Core Values',
                'items' => [
                    $locale == 'ar' ? 'الجودة: الالتزام بأعلى معايير الإنتاج الزراعي.' : 'Quality: Commitment to the highest agricultural production standards.',
                    $locale == 'ar' ? 'الاستدامة: دعم المزارعين لضمان مستقبل أفضل.' : 'Sustainability: Supporting farmers to ensure a better future.',
                    $locale == 'ar' ? 'الموثوقية: الريادة في السوق العربي الإقليمي.' : 'Reliability: Leadership in the regional Arab market.',
                ],
            ],
            'founding' => [
                'title' => $locale == 'ar' ? 'تأسيس الشركة وهويتنا' : 'Company Establishment and Identity',
                'description1' => $locale == 'ar' 
                    ? 'تأسست شركة التحالف العربي لإنتاج التقاوي (شركة مساهمة مصرية) في 10 يناير 2024 وفقاً لأحكام قانون رقم 159 لسنة 1981 ولائحته التنفيذية. انطلقت مسيرتنا برؤية طموحة لسد الفجوة في إنتاج التقاوي عالية الجودة.'
                    : 'Arab Alliance for Seeds Production (Egyptian Joint Stock Company) was established on January 10, 2024 in accordance with Law No. 159 of 1981 and its executive regulations. Our journey began with an ambitious vision to bridge the gap in high-quality seed production.',
                'description2' => $locale == 'ar' 
                    ? 'في 29 أكتوبر 2025، تم تعديل اسم الشركة ليصبح "التحالف العربي لإنتاج التقاوي" ليعكس رؤيتنا التوسعية الجديدة وطموحنا في قيادة القطاع الزراعي على مستوى المنطقة العربية.'
                    : 'On October 29, 2025, the company name was changed to "Arab Alliance for Seeds Production" to reflect our new expansion vision and ambition to lead the agricultural sector in the Arab region.',
            ],
            'purpose' => [
                'title' => $locale == 'ar' ? 'غرض الشركة' : 'Company Purpose',
                'items' => [
                    $locale == 'ar' ? 'إنتاج كافة أنواع التقاوي والبذور الزراعية من الخضروات والفاكهة بكافة أنواعها وعلى الأخص تقاوي البطاطس' : 'Production of all types of agricultural seeds from vegetables and fruits, especially potato seeds',
                    $locale == 'ar' ? 'غربلة وفرز تقاوي الحاصلات الزراعية وكافة التقاوي وتخزين التقاوي بالثلاجات المعدة لذلك' : 'Screening and sorting of agricultural crop seeds and storage in designated refrigerators',
                    $locale == 'ar' ? 'تجارة الأسمدة والمخصبات والكيماويات الزراعية والمواد الأولية والمبيدات الحشرية والزراعية' : 'Trading in fertilizers, agricultural chemicals, raw materials, and pesticides',
                    $locale == 'ar' ? 'تسويق وبيع الحاصلات والتقاوي والبذور الزراعية' : 'Marketing and selling crops, seeds, and agricultural products',
                    $locale == 'ar' ? 'إقامة وتشغيل مصنع لتصنيع وتعبئة وتغليف الأسمدة الصلبة والسائلة والأسمدة الورقية' : 'Establishing and operating a factory for manufacturing, packaging solid and liquid fertilizers',
                ],
            ],
            'capital' => [
                'title' => $locale == 'ar' ? 'تطور رأس المال' : 'Capital Evolution',
                'subtitle' => $locale == 'ar' ? 'نظرة على نمو القيمة المالية للشركة من التأسيس حتى 2025' : 'Overview of company financial value growth from establishment to 2025',
                'info' => [
                    'title' => $locale == 'ar' ? 'رأس مال الشركة' : 'Company Capital',
                    'authorized' => $locale == 'ar' ? 'رأس المال المرخص به' : 'Authorized Capital',
                    'authorizedValue' => $locale == 'ar' ? '1,000,000,000 جنيه مصري (مليار جنيه)' : '1,000,000,000 EGP (One Billion)',
                    'issued' => $locale == 'ar' ? 'رأس المال المصدر والمدفوع' : 'Issued and Paid Capital',
                    'issuedValue' => $locale == 'ar' ? '612,500,000 جنيه مصري (مدفوع 100%)' : '612,500,000 EGP (100% Paid)',
                    'shares' => $locale == 'ar' ? 'موزع على 612,500,000 سهم بقيمة اسمية 1 جنيه للسهم' : 'Distributed over 612,500,000 shares with nominal value of 1 EGP per share',
                ],
                'timeline' => $timeline,
            ],
        ];
        
        return view('about', compact('data', 'locale'));
    }
}
