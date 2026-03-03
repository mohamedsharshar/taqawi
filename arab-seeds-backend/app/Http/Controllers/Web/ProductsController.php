<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $products = [
            [
                'title' => $locale == 'ar' ? 'البذور والتقاوي الزراعية' : 'Agricultural Seeds',
                'desc' => $locale == 'ar' ? 'توفير مجموعة واسعة من بذور الخضروات والمحاصيل الحقلية بأعلى معدلات الإنبات.' : 'Providing a wide range of vegetable and field crop seeds with the highest germination rates.',
                'img' => '/images/p1.png'
            ],
            [
                'title' => $locale == 'ar' ? 'الأسمدة والمخصبات' : 'Fertilizers',
                'desc' => $locale == 'ar' ? 'حلول تسميد متكاملة تشمل الأسمدة المركبة والمعدنية والمخصبات الحيوية.' : 'Integrated fertilization solutions including compound, mineral and biological fertilizers.',
                'img' => '/images/p2.png'
            ],
            [
                'title' => $locale == 'ar' ? 'الحاصلات الزراعية' : 'Agricultural Crops',
                'desc' => $locale == 'ar' ? 'تخزين وتصدير الحاصلات الزراعية الطازجة وفقاً للمواصفات العالمية.' : 'Storage and export of fresh agricultural crops according to international standards.',
                'img' => '/images/p3.jpg'
            ],
            [
                'title' => $locale == 'ar' ? 'مستلزمات شبكات الري' : 'Irrigation Systems',
                'desc' => $locale == 'ar' ? 'توريد كافة قطع الغيار والحلول ومستلزمات الشبكات لترشيد المياه.' : 'Supply of all spare parts, solutions and network supplies for water rationalization.',
                'img' => '/images/p4.jpg'
            ],
            [
                'title' => $locale == 'ar' ? 'الإنتاج الحيواني والداجني' : 'Livestock Production',
                'desc' => $locale == 'ar' ? 'توفير الأعلاف والإضافات الغذائية ومستلزمات المزارع لزيادة الإنتاج.' : 'Providing feed, nutritional supplements and farm supplies to increase production.',
                'img' => '/images/p5.png'
            ],
            [
                'title' => $locale == 'ar' ? 'الاستشارات الزراعية' : 'Agricultural Consulting',
                'desc' => $locale == 'ar' ? 'تقديم الدعم الفني والاستشارات المتخصصة للمزارعين والمستثمرين.' : 'Providing technical support and specialized consultations for farmers and investors.',
                'img' => '/images/p6.png'
            ],
        ];
        
        return view('products', compact('products', 'locale'));
    }
}
