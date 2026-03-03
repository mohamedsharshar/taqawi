<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $news = [
            [
                'title' => $locale == 'ar' ? 'نتائج الربع السنوي: أرقام قياسية في محاصيل الحبوب' : 'Quarterly Results: Record Numbers in Grain Crops',
                'date' => $locale == 'ar' ? '٢٠ أكتوبر ٢٠٢٥' : 'October 20, 2025',
                'tag' => $locale == 'ar' ? 'إنجازات' : 'Achievements',
                'img' => 'https://images.pexels.com/photos/265216/pexels-photo-265216.jpeg?auto=compress&cs=tinysrgb&w=800'
            ],
            [
                'title' => $locale == 'ar' ? 'توقيع اتفاقية تعاون دولي لتطوير تقنيات إنتاج القمح' : 'Signing International Cooperation Agreement to Develop Wheat Production Technologies',
                'date' => $locale == 'ar' ? '١٥ أكتوبر ٢٠٢٥' : 'October 15, 2025',
                'tag' => $locale == 'ar' ? 'شراكة دولية' : 'International Partnership',
                'img' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&auto=format&fit=crop'
            ],
            [
                'title' => $locale == 'ar' ? 'إطلاق مبادرة "بذور المستقبل" لدعم المزارعين العرب' : 'Launching "Seeds of the Future" Initiative to Support Arab Farmers',
                'date' => $locale == 'ar' ? '٠٥ أكتوبر ٢٠٢٥' : 'October 5, 2025',
                'tag' => $locale == 'ar' ? 'مبادرة جديدة' : 'New Initiative',
                'img' => '/images/img2.jpeg'
            ],
        ];
        
        return view('news', compact('news', 'locale'));
    }
}
