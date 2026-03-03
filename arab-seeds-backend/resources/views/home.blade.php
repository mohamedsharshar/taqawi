@extends('layouts.app')

@section('title', ($data['hero']['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="space-y-20 pb-20 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 text-center px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/img1.jpeg') }}')">
        <div class="absolute inset-0 bg-black/50"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto space-y-6">
            <h3 class="text-yellow-400 font-medium tracking-wide">{{ $data['hero']['tag'] }}</h3>
            <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight">
                {{ $data['hero']['title'] }}
            </h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                {{ $data['hero']['description'] }}
            </p>
            <div class="flex justify-center gap-4 pt-6">
                <a href="{{ route('about') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    {{ $data['hero']['cta1'] }}
                </a>
                <a href="{{ route('investors') }}" class="bg-gray-900 hover:bg-gray-800 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    {{ $data['hero']['cta2'] }}
                </a>
            </div>
        </div>
    </section>

    <!-- Info Cards -->
    <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-[#221e1a] p-6 rounded-xl border border-gray-200 dark:border-[#332e27] shadow-sm hover:shadow-lg transition-shadow flex items-center justify-between">
            <div>
                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $data['info']['foundingYear'] }}</p>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">{{ $data['info']['foundingYearValue'] }}</p>
            </div>
            <div class="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
                <i data-lucide="calendar" class="w-8 h-8"></i>
            </div>
        </div>
        <div class="bg-white dark:bg-[#221e1a] p-6 rounded-xl border border-gray-200 dark:border-[#332e27] shadow-sm hover:shadow-lg transition-shadow flex items-center justify-between">
            <div>
                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $data['info']['legalForm'] }}</p>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">{{ $data['info']['legalFormValue'] }}</p>
            </div>
            <div class="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
                <i data-lucide="briefcase" class="w-8 h-8"></i>
            </div>
        </div>
    </section>

    <!-- Business Sectors -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">{{ $data['sectors']['title'] }}</h2>
            <p class="text-gray-600 dark:text-gray-400">{{ $data['sectors']['subtitle'] }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($data['sectors']['items'] as $sector)
            <div class="bg-white dark:bg-[#221e1a] p-6 rounded-xl border border-gray-200 dark:border-[#332e27] shadow-sm hover:shadow-lg transition-all text-center group">
                <div class="text-yellow-600 dark:text-yellow-500 flex justify-center mb-4 transform group-hover:scale-110 transition-transform">
                    <i data-lucide="{{ $sector['icon'] }}" class="w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $sector['title'] }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $sector['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Financial Indicators -->
    <section class="max-w-6xl mx-auto px-4 pt-10 border-t border-gray-200 dark:border-[#332e27]">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">{{ $data['financial']['title'] }}</h2>
            <p class="text-gray-600 dark:text-gray-400">{{ $data['financial']['subtitle'] }}</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
            @foreach($data['financial']['stats'] as $index => $stat)
            <div class="border-r border-gray-200 dark:border-[#332e27] last:border-0 px-4">
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">{{ $stat['label'] }}</p>
                <p class="text-4xl font-bold text-gray-900 dark:text-white mb-1">
                    {{ $stat['value'] }} <span class="text-lg text-yellow-600 dark:text-yellow-500">{{ $data['financial']['currency'] }}</span>
                </p>
                <p class="text-xs text-gray-500 flex justify-center items-center gap-1">
                    @if($index === 0)
                    <i data-lucide="trending-up" class="w-3 h-3 text-green-500"></i>
                    @endif
                    {{ $stat['sub'] }}
                </p>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
