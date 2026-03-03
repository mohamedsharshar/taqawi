<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $data = [
            'hero' => [
                'tag' => $locale == 'ar' ? 'التميز في الإنتاج الزراعي' : 'Excellence in Agricultural Production',
                'title' => $locale == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production',
                'description' => $locale == 'ar' 
                    ? 'نعمل على تطوير الإنتاج الزراعي بأعلى المعايير العالمية وتقنيات إنتاج التقاوي المتطورة لدعم الأمن الغذائي المستدام.'
                    : 'We work to develop agricultural production with the highest international standards and advanced seed production techniques to support sustainable food security.',
                'cta1' => $locale == 'ar' ? 'عن الشركة' : 'About Us',
                'cta2' => $locale == 'ar' ? 'علاقات المستثمرين' : 'Investor Relations',
            ],
            'info' => [
                'foundingYear' => $locale == 'ar' ? 'سنة التأسيس' : 'Founding Year',
                'foundingYearValue' => $locale == 'ar' ? '10 يناير 2024' : 'January 10, 2024',
                'legalForm' => $locale == 'ar' ? 'الشكل القانوني' : 'Legal Form',
                'legalFormValue' => $locale == 'ar' ? 'شركة مساهمة مصرية' : 'Egyptian Joint Stock Company',
            ],
            'sectors' => [
                'title' => $locale == 'ar' ? 'قطاعات الأعمال' : 'Business Sectors',
                'subtitle' => $locale == 'ar' ? 'ماذا نقدم' : 'What We Offer',
                'items' => [
                    [
                        'icon' => 'leaf',
                        'title' => $locale == 'ar' ? 'تقاوي البطاطس' : 'Potato Seeds',
                        'desc' => $locale == 'ar' 
                            ? 'إنتاج وتوزيع أفضل الأصناف العالمية بأعلى إنتاجية ومقاومة للأمراض.'
                            : 'Production and distribution of the best international varieties with highest productivity and disease resistance.',
                    ],
                    [
                        'icon' => 'droplet',
                        'title' => $locale == 'ar' ? 'الأسمدة' : 'Fertilizers',
                        'desc' => $locale == 'ar' 
                            ? 'حلول تغذية النبات المتكاملة والمصممة خصيصاً لمختلف أنواع التربة.'
                            : 'Integrated plant nutrition solutions designed specifically for different soil types.',
                    ],
                    [
                        'icon' => 'shield',
                        'title' => $locale == 'ar' ? 'نظم الري' : 'Irrigation Systems',
                        'desc' => $locale == 'ar' 
                            ? 'تقنيات الري الحديثة والذكية لترشيد استهلاك المياه وزيادة الكفاءة.'
                            : 'Modern and smart irrigation technologies to rationalize water consumption and increase efficiency.',
                    ],
                    [
                        'icon' => 'trending-up',
                        'title' => $locale == 'ar' ? 'المبيدات' : 'Pesticides',
                        'desc' => $locale == 'ar' 
                            ? 'وقاية المحاصيل الفعالة باستخدام أحدث المبيدات الآمنة بيئياً.'
                            : 'Effective crop protection using the latest environmentally safe pesticides.',
                    ],
                    [
                        'icon' => 'leaf',
                        'title' => $locale == 'ar' ? 'التقاوي المحسنة' : 'Improved Seeds',
                        'desc' => $locale == 'ar' 
                            ? 'تطوير السلالات المحلية لضمان الاكتفاء الذاتي من التقاوي عالية الجودة.'
                            : 'Development of local varieties to ensure self-sufficiency in high-quality seeds.',
                    ],
                    [
                        'icon' => 'users',
                        'title' => $locale == 'ar' ? 'الاستشارات الزراعية' : 'Agricultural Consulting',
                        'desc' => $locale == 'ar' 
                            ? 'خبرات فنية متخصصة وفريق دعم ميداني لضمان نجاح المزارعين.'
                            : 'Specialized technical expertise and field support team to ensure farmers success.',
                    ],
                ],
            ],
            'financial' => [
                'title' => $locale == 'ar' ? 'المؤشرات المالية الرئيسية' : 'Key Financial Indicators',
                'subtitle' => $locale == 'ar' ? 'الأداء المالي' : 'Financial Performance',
                'currency' => $locale == 'ar' ? 'ج.م' : 'EGP',
                'stats' => [
                    [
                        'label' => $locale == 'ar' ? 'صافي الربح الحالي' : 'Current Net Profit',
                        'value' => '7.17M',
                        'sub' => $locale == 'ar' ? 'نمو إيجابي' : 'Positive Growth',
                    ],
                    [
                        'label' => $locale == 'ar' ? 'صافي الربح المستهدف' : 'Target Net Profit',
                        'value' => '9.22M',
                        'sub' => $locale == 'ar' ? 'خطة العام القادم' : 'Next Year Plan',
                    ],
                    [
                        'label' => $locale == 'ar' ? 'إجمالي الأصول' : 'Total Assets',
                        'value' => '779M',
                        'sub' => $locale == 'ar' ? 'أصول ثابتة ومتداولة' : 'Fixed and Current Assets',
                    ],
                    [
                        'label' => $locale == 'ar' ? 'رأس المال' : 'Capital',
                        'value' => '612.5M',
                        'sub' => $locale == 'ar' ? 'مدفوع بالكامل' : 'Fully Paid',
                    ],
                ],
            ],
        ];
        
        return view('home', compact('data'));
    }
}
