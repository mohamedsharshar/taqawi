@extends('layouts.app')

@section('title', ($locale == 'ar' ? 'الأخبار' : 'News') . ' - التحالف العربي لإنتاج التقاوي')

@section('content')
<div class="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-64 bg-cover bg-center bg-no-repeat rounded-2xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style="background-image: url('/images/news.png')">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="text-center z-10 px-4">
                <span class="text-yellow-400 text-sm font-medium mb-2 inline-block">{{ $locale == 'ar' ? 'المنصة الرسمية' : 'Official Platform' }}</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $locale == 'ar' ? 'المركز الإعلامي والأخبار الرسمية' : 'Media Center and Official News' }}</h1>
                <p class="text-gray-100">{{ $locale == 'ar' ? 'نوافيكم بآخر المستجدات والابتكارات في عالم البذور والزراعة المستدامة في العالم العربي.' : 'We provide you with the latest developments and innovations in the world of seeds and sustainable agriculture in the Arab world.' }}</p>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8 overflow-x-auto">
            <button class="pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500">
                {{ $locale == 'ar' ? 'أخبار المؤسسة' : 'Company News' }}
            </button>
            <button class="pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ $locale == 'ar' ? 'أخبار زراعية' : 'Agricultural News' }}
            </button>
            <button class="pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ $locale == 'ar' ? 'بيانات صحفية' : 'Press Releases' }}
            </button>
            <button class="pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ $locale == 'ar' ? 'تقارير سنوية' : 'Annual Reports' }}
            </button>
        </div>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($news as $item)
            <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl overflow-hidden group hover:border-yellow-600 dark:hover:border-yellow-500/50 shadow-lg hover:shadow-xl transition-all">
                <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-[#1a1611] dark:to-[#1a1611] relative">
                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                    <span class="absolute top-4 right-4 bg-white/90 dark:bg-[#1c1813]/80 text-gray-900 dark:text-white text-xs px-2 py-1 rounded backdrop-blur-sm shadow-sm">
                        {{ $item['tag'] }}
                    </span>
                </div>
                <div class="p-6">
                    <p class="text-yellow-600 dark:text-yellow-500 text-xs mb-2 flex items-center gap-1">
                        <i data-lucide="calendar" class="w-3 h-3"></i> {{ $item['date'] }}
                    </p>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors leading-snug">
                        {{ $item['title'] }}
                    </h3>
                    <button class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white flex items-center gap-1">
                        {{ $locale == 'ar' ? 'اقرأ المزيد' : 'Read More' }} <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="max-w-4xl mx-auto px-4">
        <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl text-center p-10 bg-gradient-to-b from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#1c1813] border-t-4 border-yellow-600 dark:border-yellow-500 shadow-xl">
            <div class="bg-yellow-100 dark:bg-yellow-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-yellow-600 dark:text-yellow-500">
                <i data-lucide="mail" class="w-8 h-8"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ $locale == 'ar' ? 'سيتم نشر التحديثات الرسمية هنا قريباً' : 'Official updates will be published here soon' }}</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-lg mx-auto">
                {{ $locale == 'ar' ? 'نحن نعمل حالياً على إعداد تقارير مفصلة عن حصاد الموسم الحالي، اشترك في نشرتنا الإخبارية لتصلك آخر أخبار التحالف.' : 'We are currently preparing detailed reports on the current season harvest, subscribe to our newsletter to receive the latest news from the Alliance.' }}
            </p>
            <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                <input type="email" placeholder="{{ $locale == 'ar' ? 'البريد الإلكتروني' : 'Email' }}" class="bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-2 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 flex-grow text-left dir-ltr">
                <button type="button" class="bg-yellow-600 hover:bg-yellow-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 text-white dark:text-black px-6 py-2 rounded-lg font-medium transition-colors whitespace-nowrap">
                    {{ $locale == 'ar' ? 'اشترك الآن' : 'Subscribe Now' }}
                </button>
            </form>
            <p class="text-xs text-gray-500 mt-4">{{ $locale == 'ar' ? 'نحترم خصوصيتك، لن نقوم بإرسال رسائل مزعجة أبداً.' : 'We respect your privacy, we will never send spam messages.' }}</p>
        </div>
    </section>
</div>
@endsection
