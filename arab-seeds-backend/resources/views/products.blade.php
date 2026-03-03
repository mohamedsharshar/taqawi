@extends('layouts.app')

@section('title', ($data['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="min-h-screen bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813] py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ $data['title'] }}</h1>
            <p class="text-gray-600 dark:text-gray-400">{{ $data['description'] }}</p>
        </div>
        
        <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] p-12 text-center shadow-lg">
            <i data-lucide="package" class="w-16 h-16 text-yellow-600 dark:text-yellow-500 mx-auto mb-4"></i>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                {{ $locale == 'ar' ? 'قريباً' : 'Coming Soon' }}
            </h2>
            <p class="text-gray-600 dark:text-gray-400">
                {{ $locale == 'ar' ? 'صفحة المنتجات قيد التطوير' : 'Products page is under development' }}
            </p>
        </div>
    </div>
</div>
@endsection
