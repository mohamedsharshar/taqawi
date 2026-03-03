<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $projects = [
            [
                'title' => $locale == 'ar' ? 'تطوير نظم الري الذكي' : 'Smart Irrigation Systems Development',
                'desc' => $locale == 'ar' ? 'استخدام الذكاء الاصطناعي في ترشيد المياه وزيادة كفاءة الري.' : 'Using artificial intelligence to rationalize water and increase irrigation efficiency.',
                'status' => $locale == 'ar' ? 'تحت التنفيذ' : 'Ongoing',
                'img' => 'https://images.pexels.com/photos/2132250/pexels-photo-2132250.jpeg?auto=compress&cs=tinysrgb&w=800'
            ],
            [
                'title' => $locale == 'ar' ? 'مشروع استصلاح الأراضي الصحراوية' : 'Desert Land Reclamation Project',
                'desc' => $locale == 'ar' ? 'تحويل الصحراء إلى رقعة خضراء منتجة باستخدام أحدث التقنيات.' : 'Transforming the desert into a productive green area using the latest technologies.',
                'status' => $locale == 'ar' ? 'قيد التخطيط' : 'Planning',
                'img' => '/images/desert2png.png'
            ],
            [
                'title' => $locale == 'ar' ? 'مشروع الصوبات الزراعية الحديثة' : 'Modern Greenhouse Project',
                'desc' => $locale == 'ar' ? 'زيادة الإنتاجية من خلال الزراعة المحمية والمتحكم بها.' : 'Increasing productivity through protected and controlled agriculture.',
                'status' => $locale == 'ar' ? 'تحت التنفيذ' : 'Ongoing',
                'img' => '/images/sob.jpg'
            ],
            [
                'title' => $locale == 'ar' ? 'مشروع الزراعة العمودية' : 'Vertical Farming Project',
                'desc' => $locale == 'ar' ? 'حلول زراعية مبتكرة للمناطق الحضرية المكتظة بالسكان.' : 'Innovative agricultural solutions for densely populated urban areas.',
                'status' => $locale == 'ar' ? 'مستقبلي' : 'Future',
                'img' => '/images/agr.jpg'
            ],
            [
                'title' => $locale == 'ar' ? 'مجمع إنتاج التقاوي المحسنة' : 'Improved Seeds Production Complex',
                'desc' => $locale == 'ar' ? 'إنتاج سلالات محلية عالية الجودة للمزارعين العرب.' : 'Producing high-quality local strains for Arab farmers.',
                'status' => $locale == 'ar' ? 'تحت التنفيذ' : 'Ongoing',
                'img' => '/images/taq.jpg'
            ],
            [
                'title' => $locale == 'ar' ? 'مشروع المراقبة بالدرون' : 'Drone Monitoring Project',
                'desc' => $locale == 'ar' ? 'مراقبة المحاصيل وتحليل البيانات باستخدام الطائرات المسيرة.' : 'Crop monitoring and data analysis using drones.',
                'status' => $locale == 'ar' ? 'تقني' : 'Technical',
                'img' => 'https://images.pexels.com/photos/442587/pexels-photo-442587.jpeg?auto=compress&cs=tinysrgb&w=800'
            ],
        ];
        
        return view('projects', compact('projects', 'locale'));
    }
}
