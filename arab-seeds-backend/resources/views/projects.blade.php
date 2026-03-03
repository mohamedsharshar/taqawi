@extends('layouts.app')

@section('title', ($locale == 'ar' ? 'المشروعات' : 'Projects') . ' - التحالف العربي لإنتاج التقاوي')

@section('content')
<div class="space-y-12 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style="background-image: url('/images/projects_hero.jpg')">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="z-20 text-center px-4">
                <h1 class="text-4xl font-bold text-white mb-4">{{ $locale == 'ar' ? 'المشروعات' : 'Projects' }}</h1>
                <p class="text-gray-100">{{ $locale == 'ar' ? 'مشاريعنا الاستراتيجية لتعزيز الأمن الغذائي' : 'Our strategic projects to enhance food security' }}</p>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="flex justify-center gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8">
            <button class="pb-3 px-2 font-medium text-sm transition-colors text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500">
                {{ $locale == 'ar' ? 'الكل' : 'All' }}
            </button>
            <button class="pb-3 px-2 font-medium text-sm transition-colors text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ $locale == 'ar' ? 'مشاريع تحت التنفيذ' : 'Ongoing Projects' }}
            </button>
            <button class="pb-3 px-2 font-medium text-sm transition-colors text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ $locale == 'ar' ? 'مشاريع مستقبلية' : 'Future Projects' }}
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-xl overflow-hidden group shadow-lg hover:shadow-xl transition-shadow">
                <div class="relative h-48 bg-amber-100 dark:bg-[#1a1611]">
                    <img src="{{ $project['img'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover">
                    <span class="absolute top-4 right-4 bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black text-xs font-bold px-2 py-1 rounded shadow-lg">
                        {{ $project['status'] }}
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3">{{ $project['desc'] }}</p>
                    <button class="text-yellow-600 dark:text-yellow-500 text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all">
                        {{ $locale == 'ar' ? 'التفاصيل' : 'Read More' }} <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
