@extends('layouts.app')

@section('title', ($data['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="space-y-12 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 border-b border-gray-200 dark:border-[#332e27] pb-6 gap-4">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">{{ $data['title'] }}</h1>
                <p class="text-gray-600 dark:text-gray-400">{{ $data['description'] }}</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- القوائم المالية -->
            <div class="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                        <i data-lucide="file-text" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $data['financialStatements']['title'] }}</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">{{ $data['financialStatements']['description'] }}</p>
                
                @if($data['financialStatements']['items']->count() > 0)
                    <div class="space-y-2 mb-4">
                        @foreach($data['financialStatements']['items']->take(3) as $statement)
                        <a href="{{ $statement->file_url }}" 
                           target="_blank"
                           class="block p-2 hover:bg-gray-50 dark:hover:bg-[#1c1813] rounded text-sm">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700 dark:text-gray-300">
                                    {{ $locale == 'ar' ? $statement->title['ar'] : $statement->title['en'] }}
                                </span>
                                <i data-lucide="download" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i>
                            </div>
                            <span class="text-xs text-gray-500">
                                {{ $statement->statement_date->format($locale == 'ar' ? 'd/m/Y' : 'Y-m-d') }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        {{ $locale == 'ar' ? 'لا توجد قوائم مالية متاحة حالياً' : 'No financial statements available' }}
                    </p>
                @endif
            </div>

            <!-- محاضر الاجتماعات -->
            <div class="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                        <i data-lucide="users" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $data['meetingMinutes']['title'] }}</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">{{ $data['meetingMinutes']['description'] }}</p>
                
                @if($data['meetingMinutes']['items']->count() > 0)
                    <div class="space-y-2 mb-4">
                        @foreach($data['meetingMinutes']['items']->take(3) as $minute)
                        <a href="{{ $minute->file_url }}" 
                           target="_blank"
                           class="block p-2 hover:bg-gray-50 dark:hover:bg-[#1c1813] rounded text-sm">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700 dark:text-gray-300">
                                    {{ $locale == 'ar' ? $minute->title['ar'] : $minute->title['en'] }}
                                </span>
                                <i data-lucide="download" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i>
                            </div>
                            <span class="text-xs text-gray-500">
                                {{ $minute->meeting_date->format($locale == 'ar' ? 'd/m/Y' : 'Y-m-d') }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        {{ $locale == 'ar' ? 'لا توجد محاضر متاحة حالياً' : 'No meeting minutes available' }}
                    </p>
                @endif
            </div>

            <!-- مدير علاقات المستثمرين -->
            <div class="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                        <i data-lucide="mail" class="w-6 h-6 text-yellow-600 dark:text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $data['irManager']['title'] }}</h3>
                </div>
                
                @if($data['irManager']['data'])
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-500 mb-1">{{ $data['irManager']['labels']['name'] }}</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ $locale == 'ar' ? $data['irManager']['data']->name['ar'] : $data['irManager']['data']->name['en'] }}
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                {{ $locale == 'ar' ? $data['irManager']['data']->position['ar'] : $data['irManager']['data']->position['en'] }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-500">{{ $data['irManager']['labels']['phone'] }}</p>
                                <a href="tel:{{ $data['irManager']['data']->phone }}" class="text-sm text-gray-900 dark:text-white hover:text-yellow-600" dir="ltr">
                                    {{ $data['irManager']['data']->phone }}
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="mail" class="w-4 h-4 text-yellow-600 dark:text-yellow-500"></i>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-500">{{ $data['irManager']['labels']['email'] }}</p>
                                <a href="mailto:{{ $data['irManager']['data']->email }}" class="text-sm text-gray-900 dark:text-white hover:text-yellow-600">
                                    {{ $data['irManager']['data']->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $locale == 'ar' ? 'لا توجد معلومات متاحة' : 'No information available' }}
                    </p>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
