@extends('layouts.app')

@section('title', ($locale == 'ar' ? 'المنتجات' : 'Products') . ' - التحالف العربي لإنتاج التقاوي')

@section('content')
<div class="space-y-20 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style="background-image: url('/images/product_hero.jpg')">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="z-20 text-center px-4">
                <span class="text-yellow-400 text-sm font-medium">{{ $locale == 'ar' ? 'القسم الخاص' : 'Special Section' }}</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mt-2 mb-4">
                    {{ $locale == 'ar' ? 'منتجاتنا ومجالات' : 'Our Products and Areas of' }} <span class="text-yellow-400">{{ $locale == 'ar' ? 'التميز' : 'Excellence' }}</span>
                </h1>
                <p class="text-gray-100 max-w-2xl mx-auto">
                    {{ $locale == 'ar' ? 'نقدم حلولاً زراعية متكاملة بأعلى معايير الجودة العالمية لتعزيز الأمن الغذائي وتطوير القطاع الزراعي في المنطقة العربية.' : 'We provide integrated agricultural solutions with the highest global quality standards to enhance food security and develop the agricultural sector in the Arab region.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Potato Feature Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#2a2520] rounded-2xl overflow-hidden flex flex-col md:flex-row border border-gray-200 dark:border-[#332e27] shadow-lg">
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="inline-flex items-center gap-2 text-yellow-600 dark:text-yellow-500 mb-4 bg-yellow-100 dark:bg-yellow-500/10 w-fit px-3 py-1 rounded-full text-sm">
                    <i data-lucide="leaf" class="w-4 h-4"></i> {{ $locale == 'ar' ? 'المنتج الرئيسي' : 'Main Product' }}
                </div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $locale == 'ar' ? 'تقاوي البطاطس' : 'Potato Seeds' }}</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                    {{ $locale == 'ar' ? 'نتميز بإنتاج واستيراد وتصدير أفضل أصناف تقاوي البطاطس المعتمدة عالمياً. تركيزنا ينصب على توفير سلالات ذات إنتاجية عالية ومقاومة للأمراض لضمان أفضل عائد للمزارع.' : 'We specialize in producing, importing and exporting the best globally certified potato seed varieties. Our focus is on providing high-yielding, disease-resistant strains to ensure the best return for farmers.' }}
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                        <i data-lucide="check-circle" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i> {{ $locale == 'ar' ? 'استيراد أصناف أوروبية عالية الجودة' : 'Import of high-quality European varieties' }}
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                        <i data-lucide="check-circle" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i> {{ $locale == 'ar' ? 'محطات فرز وتعبئة متطورة' : 'Advanced sorting and packaging stations' }}
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                        <i data-lucide="check-circle" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i> {{ $locale == 'ar' ? 'تخزين في ثلاجات حديثة لضمان الحيوية' : 'Storage in modern refrigerators to ensure vitality' }}
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-yellow-600 hover:bg-yellow-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 text-white dark:text-black px-6 py-3 rounded-lg font-medium transition-colors w-fit">
                    {{ $locale == 'ar' ? 'اطلب عرض سعر' : 'Request Quote' }}
                </a>
            </div>
            <div class="md:w-1/2 bg-amber-100 dark:bg-[#1a1611]">
                <img src="/images/potato2.jpg" alt="{{ $locale == 'ar' ? 'تقاوي البطاطس' : 'Potato Seeds' }}" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl p-0 overflow-hidden flex flex-col group shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-40 bg-amber-100 dark:bg-[#1a1611] flex items-center justify-center text-gray-500 dark:text-gray-600 border-b border-gray-200 dark:border-[#332e27]">
                    <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover">
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $product['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 flex-grow">{{ $product['desc'] }}</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center border-2 border-gray-300 dark:border-[#332e27] hover:border-yellow-600 dark:hover:border-yellow-500 text-gray-900 dark:text-white hover:text-yellow-600 dark:hover:text-yellow-500 px-4 py-1.5 rounded-lg font-medium transition-colors w-full text-sm">
                        {{ $locale == 'ar' ? 'تواصل مع المبيعات' : 'Contact Sales' }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CTA Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="bg-gradient-to-r from-yellow-50 to-amber-50 dark:from-[#2a2520] dark:to-[#2a2520] border border-gray-200 dark:border-[#332e27] rounded-xl p-8 flex flex-col md:flex-row justify-between items-center gap-6 shadow-lg">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ $locale == 'ar' ? 'هل تبحث عن شريك استراتيجي لمشروعك؟' : 'Looking for a strategic partner for your project?' }}</h3>
                <p class="text-gray-700 dark:text-gray-400">
                    {{ $locale == 'ar' ? 'فريق خبرائنا جاهز لمساعدتك في اختيار أفضل المنتجات والحلول التي تناسب احتياجاتك وتضمن نجاح موسمك الزراعي.' : 'Our team of experts is ready to help you choose the best products and solutions that suit your needs and ensure the success of your agricultural season.' }}
                </p>
            </div>
            <div class="flex gap-4 shrink-0">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-yellow-600 hover:bg-yellow-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 text-white dark:text-black px-6 py-3 rounded-lg font-medium transition-colors whitespace-nowrap">
                    {{ $locale == 'ar' ? 'تواصل معنا الآن' : 'Contact Us Now' }}
                </a>
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center bg-gray-900 hover:bg-gray-800 dark:bg-white dark:hover:bg-gray-100 text-white dark:text-black px-6 py-3 rounded-lg font-medium transition-colors whitespace-nowrap">
                    {{ $locale == 'ar' ? 'تصفح المشاريع' : 'Browse Projects' }}
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
