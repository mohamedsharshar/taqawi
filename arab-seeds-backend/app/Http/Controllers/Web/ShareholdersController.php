<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShareholdersController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $shareholders = [
            ['name' => $locale == 'ar' ? 'الشركة الدولية للحاصيل الزراعية ش.م.م' : 'International Agricultural Crops Company', 'shares' => '201,000,000', 'percentage' => '32.82%'],
            ['name' => $locale == 'ar' ? 'الصفا انترناشيونال جروب للاستثمار والتجارة' : 'Safa International Group', 'shares' => '130,809,000', 'percentage' => '21.36%'],
            ['name' => $locale == 'ar' ? 'الشركة المصرية الفرنسية للزراعات النسيجية' : 'Egyptian French Company', 'shares' => '63,000,000', 'percentage' => '10.29%'],
            ['name' => $locale == 'ar' ? 'البنك الزراعي المصري ش.م.م' : 'Egyptian Agricultural Bank', 'shares' => '75,000,000', 'percentage' => '12.24%'],
            ['name' => $locale == 'ar' ? 'شركة طيبة للتجارة والتوكيلات والتنمية الزراعية' : 'Taiba Company', 'shares' => '68,518,500', 'percentage' => '11.19%'],
            ['name' => $locale == 'ar' ? 'الشركة المصرية للخدمات الزراعية والتجارة - إيجاست' : 'Egyptian Agricultural Services Company', 'shares' => '30,000,000', 'percentage' => '4.90%'],
            ['name' => $locale == 'ar' ? 'شركة كروبس للتنمية الزراعية' : 'Cropos Company', 'shares' => '13,500,000', 'percentage' => '2.20%'],
            ['name' => $locale == 'ar' ? 'الوحدة البحثية الإنتاجية والإرشادية بمعهد بحوث البساتين' : 'Research Unit', 'shares' => '9,000,000', 'percentage' => '1.47%'],
            ['name' => $locale == 'ar' ? 'الشركة الزراعية المصرية لإنتاج التقاوي إيجاسيد' : 'Egyptian Agricultural Seeds Company', 'shares' => '11,000,000', 'percentage' => '1.80%'],
            ['name' => $locale == 'ar' ? 'شركة الدولية للأسمدة والكيماويات' : 'International Fertilizers Company', 'shares' => '7,672,500', 'percentage' => '1.25%'],
            ['name' => $locale == 'ar' ? 'الاتحاد العام لمنتجي ومصدري الحاصلات البستانية' : 'General Union', 'shares' => '2,000,000', 'percentage' => '0.33%'],
            ['name' => $locale == 'ar' ? 'الجمعية التعاونية الزراعية العامة لمنتجي البطاطس' : 'Cooperative Association', 'shares' => '1,000,000', 'percentage' => '0.16%'],
        ];
        
        $boardMembers = [
            [
                'name' => $locale == 'ar' ? 'المحاسب / أحمد شوقي محمد السيد منتصر' : 'Ahmed Shawky Mohamed El-Sayed Montaser',
                'role' => $locale == 'ar' ? 'رئيس مجلس الإدارة والعضو المنتدب' : 'Chairman and Managing Director',
                'entity' => $locale == 'ar' ? 'ممثلاً عن الشركة الدولية للحاصيل الزراعية' : 'Representing International Agricultural Crops Company',
            ],
            [
                'name' => $locale == 'ar' ? 'المحاسب / نافع فهمي فهمي عبد المجيد' : 'Nafe Fahmy Fahmy Abdel Majeed',
                'role' => $locale == 'ar' ? 'نائب رئيس مجلس الإدارة - غير تنفيذي' : 'Vice Chairman - Non-Executive',
                'entity' => $locale == 'ar' ? 'ممثلاً عن شركة الصفا انترناشيونال جروب' : 'Representing Safa International Group',
            ],
            [
                'name' => $locale == 'ar' ? 'المهندس / محمد سالم أحمد سلامة' : 'Mohamed Salem Ahmed Salama',
                'role' => $locale == 'ar' ? 'نائب رئيس مجلس الإدارة والعضو المنتدب' : 'Vice Chairman and Managing Director',
                'entity' => $locale == 'ar' ? 'نفسه' : 'Himself',
            ],
            [
                'name' => $locale == 'ar' ? 'الأستاذ / محمد سعيد حسين خليل السيسي' : 'Mohamed Saeed Hussein Khalil El-Sisi',
                'role' => $locale == 'ar' ? 'عضو مجلس إدارة' : 'Board Member',
                'entity' => $locale == 'ar' ? 'ممثلاً عن البنك الزراعي المصري' : 'Representing Egyptian Agricultural Bank',
            ],
            [
                'name' => $locale == 'ar' ? 'الأستاذ / أحمد مصطفى عبد العزيز الحصري' : 'Ahmed Mostafa Abdel Aziz El-Hosary',
                'role' => $locale == 'ar' ? 'عضو مجلس إدارة' : 'Board Member',
                'entity' => $locale == 'ar' ? 'ممثلاً عن شركة طيبة للتجارة والتوكيلات' : 'Representing Taiba Company',
            ],
            [
                'name' => $locale == 'ar' ? 'الأستاذ / إبراهيم حسن إبراهيم الحديدي' : 'Ibrahim Hassan Ibrahim El-Hadidy',
                'role' => $locale == 'ar' ? 'عضو مجلس إدارة' : 'Board Member',
                'entity' => $locale == 'ar' ? 'ممثلاً عن الشركة الزراعية المصرية لإنتاج التقاوي' : 'Representing Egyptian Agricultural Seeds Company',
            ],
            [
                'name' => $locale == 'ar' ? 'أ.د / أحمد حلمي حسين خلف جامع' : 'Prof. Ahmed Helmy Hussein Khalaf Gamea',
                'role' => $locale == 'ar' ? 'عضو مجلس إدارة' : 'Board Member',
                'entity' => $locale == 'ar' ? 'ممثلاً عن الوحدة البحثية الإنتاجية والإرشادية' : 'Representing Research Unit',
            ],
        ];
        
        $data = [
            'title' => $locale == 'ar' ? 'هيكل المساهمين ومجلس الإدارة' : 'Shareholders Structure and Board of Directors',
            'description' => $locale == 'ar' 
                ? 'البيانات المؤسسية وحوكمة التحالف العربي لإنتاج التقاوي'
                : 'Institutional data and governance of Arab Alliance for Seeds Production',
            'shareholders' => $shareholders,
            'boardMembers' => $boardMembers,
            'labels' => [
                'shareholder' => $locale == 'ar' ? 'المساهم' : 'Shareholder',
                'shares' => $locale == 'ar' ? 'عدد الأسهم' : 'Number of Shares',
                'percentage' => $locale == 'ar' ? 'نسبة المساهمة' : 'Percentage',
                'total' => $locale == 'ar' ? 'الإجمالي' : 'Total',
                'boardTitle' => $locale == 'ar' ? 'مجلس الإدارة' : 'Board of Directors',
                'boardSubtitle' => $locale == 'ar' ? 'أعضاء مجلس الإدارة' : 'Board Members',
            ],
        ];
        
        return view('shareholders', compact('data', 'locale'));
    }
}
