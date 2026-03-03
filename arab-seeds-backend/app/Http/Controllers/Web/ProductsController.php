<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $data = [
            'title' => $locale == 'ar' ? 'المنتجات والخدمات' : 'Products and Services',
            'description' => $locale == 'ar' ? 'نقدم مجموعة متكاملة من المنتجات والخدمات الزراعية' : 'We offer a complete range of agricultural products and services',
        ];
        
        return view('products', compact('data', 'locale'));
    }
}
