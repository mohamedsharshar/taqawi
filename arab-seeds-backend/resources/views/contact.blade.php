@extends('layouts.app')

@section('title', ($locale == 'ar' ? 'اتصل بنا' : 'Contact Us') . ' - التحالف العربي لإنتاج التقاوي')

@section('content')
<div class="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">{{ $locale == 'ar' ? 'اتصل بنا' : 'Contact Us' }}</h1>
        <p class="text-gray-600 dark:text-gray-400">
            {{ $locale == 'ar' ? 'نحن هنا للإجابة على استفساراتكم ومساعدتكم في كل ما يتعلق بمنتجاتنا وحلولنا الزراعية.' : 'We are here to answer your inquiries and help you with everything related to our products and agricultural solutions.' }}
        </p>
    </section>

    <!-- Form and Info Section -->
    <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Contact Form -->
        <div class="md:col-span-2">
            <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl p-8 shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">{{ $locale == 'ar' ? 'أرسل لنا رسالة' : 'Send us a message' }}</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $locale == 'ar' ? 'الاسم الكامل' : 'Full Name' }}</label>
                            <input type="text" placeholder="{{ $locale == 'ar' ? 'أدخل اسمك الكريم' : 'Enter your name' }}" class="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $locale == 'ar' ? 'البريد الإلكتروني' : 'Email' }}</label>
                            <input type="email" placeholder="name@example.com" class="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 text-left dir-ltr">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $locale == 'ar' ? 'الموضوع' : 'Subject' }}</label>
                        <select class="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-700 dark:text-gray-400 px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 appearance-none">
                            <option>{{ $locale == 'ar' ? 'اختر موضوع الرسالة' : 'Choose message subject' }}</option>
                            <option>{{ $locale == 'ar' ? 'استفسار عن المنتجات' : 'Product Inquiry' }}</option>
                            <option>{{ $locale == 'ar' ? 'علاقات المستثمرين' : 'Investor Relations' }}</option>
                            <option>{{ $locale == 'ar' ? 'طلب توظيف' : 'Job Application' }}</option>
                            <option>{{ $locale == 'ar' ? 'أخرى' : 'Other' }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $locale == 'ar' ? 'الرسالة' : 'Message' }}</label>
                        <textarea rows="5" placeholder="{{ $locale == 'ar' ? 'اكتب تفاصيل استفسارك هنا...' : 'Write your inquiry details here...' }}" class="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 resize-none"></textarea>
                    </div>
                    <button type="button" class="inline-flex items-center gap-2 bg-yellow-600 hover:bg-yellow-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 text-white dark:text-black px-6 py-3 rounded-lg font-medium transition-colors">
                        {{ $locale == 'ar' ? 'إرسال الرسالة' : 'Send Message' }} <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="md:col-span-1 space-y-6">
            <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl p-6 shadow-lg h-full">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                    <div class="w-2 h-6 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
                    {{ $locale == 'ar' ? 'بيانات التواصل' : 'Contact Information' }}
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-medium mb-1">{{ $locale == 'ar' ? 'العنوان' : 'Address' }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $locale == 'ar' ? 'القاهرة، جمهورية مصر العربية' : 'Cairo, Arab Republic of Egypt' }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-medium mb-1">{{ $locale == 'ar' ? 'الهاتف' : 'Phone' }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm dir-ltr text-right">+20 123 456 7890</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-gray-900 dark:text-white font-medium mb-1">{{ $locale == 'ar' ? 'البريد الإلكتروني' : 'Email' }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">info@arabseeds.com</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-200 dark:border-[#332e27]">
                    <h4 class="text-gray-900 dark:text-white font-medium mb-3">{{ $locale == 'ar' ? 'ساعات العمل' : 'Working Hours' }}</h4>
                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                        <span>{{ $locale == 'ar' ? 'الأحد - الخميس' : 'Sunday - Thursday' }}</span>
                        <span>{{ $locale == 'ar' ? '8:00 ص - 4:00 م' : '8:00 AM - 4:00 PM' }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>{{ $locale == 'ar' ? 'الجمعة - السبت' : 'Friday - Saturday' }}</span>
                        <span class="text-yellow-600 dark:text-yellow-500">{{ $locale == 'ar' ? 'مغلق' : 'Closed' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-96 bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-[#2a2520] dark:to-[#2a2520] rounded-xl border border-gray-200 dark:border-[#332e27] flex items-center justify-center overflow-hidden relative shadow-lg">
            <div class="absolute inset-0 opacity-10 dark:opacity-20" style="background-image: radial-gradient(circle at center, #c59d5f 2px, transparent 2px); background-size: 20px 20px"></div>
            <div class="text-center z-10">
                <i data-lucide="map-pin" class="w-12 h-12 text-yellow-600 dark:text-yellow-500 mx-auto mb-2"></i>
                <span class="bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white px-4 py-2 rounded shadow-lg border border-gray-200 dark:border-[#332e27]">
                    {{ $locale == 'ar' ? 'مقر التحالف العربي' : 'Arab Alliance Headquarters' }}
                </span>
            </div>
        </div>
    </section>
</div>
@endsection
