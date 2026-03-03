@extends('layouts.app')

@section('title', ($data['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="min-h-screen bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813] py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ $data['title'] }}</h1>
            <p class="text-gray-600 dark:text-gray-400">{{ $data['description'] }}</p>
        </div>
        
        @if(session('success'))
        <div class="bg-green-50 dark:bg-green-500/10 border border-green-200 dark:border-green-500/30 rounded-lg p-4 mb-6">
            <p class="text-green-800 dark:text-green-400">{{ session('success') }}</p>
        </div>
        @endif
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] p-6 shadow-lg">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ $locale == 'ar' ? 'أرسل رسالة' : 'Send Message' }}
                </h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ $locale == 'ar' ? 'الاسم' : 'Name' }}
                        </label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-2 border border-gray-300 dark:border-[#332e27] rounded-lg bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white focus:ring-2 focus:ring-yellow-600 dark:focus:ring-yellow-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ $locale == 'ar' ? 'البريد الإلكتروني' : 'Email' }}
                        </label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-2 border border-gray-300 dark:border-[#332e27] rounded-lg bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white focus:ring-2 focus:ring-yellow-600 dark:focus:ring-yellow-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ $locale == 'ar' ? 'الرسالة' : 'Message' }}
                        </label>
                        <textarea name="message" rows="4" required
                                  class="w-full px-4 py-2 border border-gray-300 dark:border-[#332e27] rounded-lg bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white focus:ring-2 focus:ring-yellow-600 dark:focus:ring-yellow-500 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                        {{ $locale == 'ar' ? 'إرسال' : 'Send' }}
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-6">
                <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] p-6 shadow-lg">
                    <div class="flex items-center gap-3 mb-4">
                        <i data-lucide="phone" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                            {{ $locale == 'ar' ? 'الهاتف' : 'Phone' }}
                        </h3>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300" dir="ltr">+20 2 3854 0123</p>
                </div>
                
                <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] p-6 shadow-lg">
                    <div class="flex items-center gap-3 mb-4">
                        <i data-lucide="mail" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                            {{ $locale == 'ar' ? 'البريد الإلكتروني' : 'Email' }}
                        </h3>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">ir@arabseeds.com.eg</p>
                </div>
                
                <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] p-6 shadow-lg">
                    <div class="flex items-center gap-3 mb-4">
                        <i data-lucide="map-pin" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                            {{ $locale == 'ar' ? 'العنوان' : 'Address' }}
                        </h3>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">
                        {{ $locale == 'ar' ? 'القاهرة، مصر' : 'Cairo, Egypt' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
