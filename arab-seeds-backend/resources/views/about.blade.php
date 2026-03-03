@extends('layouts.app')

@section('title', ($data['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="space-y-20 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style="background-image: url('https://images.pexels.com/photos/1595104/pexels-photo-1595104.jpeg?auto=compress&cs=tinysrgb&w=1200')">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="z-20 text-center">
                <span class="bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black px-3 py-1 text-xs font-bold rounded mb-4 inline-block">
                    {{ $data['hero']['tag'] }}
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white">{{ $data['hero']['title'] }}</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Values Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 dark:from-yellow-500 dark:to-yellow-600 rounded-lg p-6 text-white dark:text-black sticky top-24 shadow-xl">
                    <h3 class="text-xl font-bold mb-6 border-b border-white/20 dark:border-black/10 pb-4">{{ $data['values']['title'] }}</h3>
                    <ul class="space-y-4 font-medium">
                        @foreach($data['values']['items'] as $value)
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 shrink-0 mt-0.5"></i>
                            <span>{{ $value }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-12">
                <!-- Founding -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
                        <div class="w-2 h-8 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
                        {{ $data['founding']['title'] }}
                    </h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                        {{ $data['founding']['description1'] }}
                    </p>
                    <div class="bg-amber-50 dark:bg-[#2a2520] border-r-4 border-yellow-600 dark:border-yellow-500 p-6 rounded-l-lg italic text-gray-700 dark:text-gray-300 shadow-sm">
                        {{ $data['founding']['description2'] }}
                    </div>
                </div>

                <!-- Purpose -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
                        <div class="w-2 h-8 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
                        {{ $data['purpose']['title'] }}
                    </h2>
                    <div class="bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-lg p-6 shadow-sm">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                            @foreach($data['purpose']['items'] as $item)
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-600 dark:text-yellow-500 mt-1">•</span>
                                <span>{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Capital Info Card -->
                <div class="bg-white dark:bg-[#221e1a] p-6 rounded-xl border border-gray-200 dark:border-[#332e27] shadow-sm hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4">
                        <div class="bg-yellow-100 dark:bg-yellow-500/10 p-3 rounded-full text-yellow-600 dark:text-yellow-500">
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $data['capital']['info']['title'] }}</h3>
                            <div class="space-y-2 text-sm">
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-semibold text-yellow-600 dark:text-yellow-500">{{ $data['capital']['info']['authorized'] }}:</span> {{ $data['capital']['info']['authorizedValue'] }}
                                </p>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-semibold text-yellow-600 dark:text-yellow-500">{{ $data['capital']['info']['issued'] }}:</span> {{ $data['capital']['info']['issuedValue'] }}
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-xs mt-3">
                                    {{ $data['capital']['info']['shares'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="pt-8 border-t border-gray-200 dark:border-[#332e27]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-2">{{ $data['capital']['title'] }}</h2>
                    <p class="text-center text-gray-600 dark:text-gray-400 mb-10 text-sm">
                        {{ $data['capital']['subtitle'] }}
                    </p>
                    <div class="relative">
                        <div class="absolute right-1/2 w-0.5 h-full bg-gray-200 dark:bg-[#332e27] transform translate-x-1/2"></div>
                        @foreach($data['capital']['timeline'] as $index => $event)
                        <div class="flex items-center justify-between mb-8 w-full {{ $index % 2 === 0 ? 'flex-row-reverse' : '' }}">
                            <div class="w-5/12"></div>
                            <div class="w-2/12 flex justify-center relative z-10">
                                <div class="rounded-full {{ $index === count($data['capital']['timeline']) - 1 ? 'bg-yellow-600 dark:bg-yellow-500 w-6 h-6 border-4 border-white dark:border-[#1c1813] shadow-lg' : 'bg-yellow-400 dark:bg-yellow-500/50 w-4 h-4' }}"></div>
                            </div>
                            <div class="w-5/12 {{ $index % 2 === 0 ? 'text-left pl-8' : 'text-right pr-8' }}">
                                <p class="text-sm text-gray-500 font-medium mb-1">{{ $event['date'] }}</p>
                                <div class="p-4 rounded-lg border shadow-sm {{ $index === count($data['capital']['timeline']) - 1 ? 'bg-gradient-to-br from-yellow-500 to-yellow-600 border-yellow-600 shadow-lg' : 'bg-white dark:bg-[#221e1a] border-gray-200 dark:border-[#332e27]' }}">
                                    <h4 class="font-bold {{ $index === count($data['capital']['timeline']) - 1 ? 'text-white dark:text-black text-xl' : 'text-yellow-600 dark:text-yellow-500 text-lg' }}">
                                        {{ $event['title'] }}
                                    </h4>
                                    <p class="text-sm mt-1 {{ $index === count($data['capital']['timeline']) - 1 ? 'text-white/90 dark:text-black/80' : 'text-gray-600 dark:text-gray-400' }}">
                                        {{ $event['desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
