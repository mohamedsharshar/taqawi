@extends('layouts.app')

@section('title', ($data['title'] ?? '') . ' - ' . (app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production'))

@section('content')
<div class="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style="background-image: url('https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1200')">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="z-20 text-center px-4">
                <h1 class="text-4xl font-bold text-white mb-4">{{ $data['title'] }}</h1>
                <p class="text-gray-100 max-w-2xl mx-auto">{{ $data['description'] }}</p>
            </div>
        </div>
    </section>

    <!-- Shareholders Table -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $locale == 'ar' ? 'هيكل المساهمين' : 'Shareholders Structure' }}</h2>
            <span class="bg-amber-100 dark:bg-[#2a2520] text-gray-700 dark:text-gray-400 text-xs px-3 py-1 rounded border border-gray-200 dark:border-[#332e27] shadow-sm">
                2025
            </span>
        </div>
        <div class="bg-white dark:bg-[#221e1a] rounded-xl border border-gray-200 dark:border-[#332e27] overflow-hidden shadow-lg">
            <table class="w-full text-sm text-right">
                <thead class="bg-amber-100 dark:bg-[#2a2520]">
                    <tr>
                        <th class="p-4 text-gray-700 dark:text-gray-300 font-medium">{{ $data['labels']['shareholder'] }}</th>
                        <th class="p-4 text-gray-700 dark:text-gray-300 font-medium text-center">{{ $data['labels']['shares'] }}</th>
                        <th class="p-4 text-gray-700 dark:text-gray-300 font-medium text-center">{{ $data['labels']['percentage'] }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-[#332e27]">
                    @foreach($data['shareholders'] as $shareholder)
                    <tr class="hover:bg-gray-50 dark:hover:bg-[#2a2520]/50">
                        <td class="p-4 text-gray-900 dark:text-white">{{ $shareholder['name'] }}</td>
                        <td class="p-4 text-gray-600 dark:text-gray-400 text-center" dir="ltr">{{ $shareholder['shares'] }}</td>
                        <td class="p-4 text-yellow-600 dark:text-yellow-500 text-center font-bold">{{ $shareholder['percentage'] }}</td>
                    </tr>
                    @endforeach
                    <tr class="bg-yellow-100 dark:bg-[#2a2520] font-bold">
                        <td class="p-4 text-gray-900 dark:text-white">{{ $data['labels']['total'] }}</td>
                        <td class="p-4 text-gray-900 dark:text-white text-center" dir="ltr">612,500,000</td>
                        <td class="p-4 text-yellow-600 dark:text-yellow-500 text-center">100%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Board of Directors -->
    <section class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">{{ $data['labels']['boardTitle'] }}</h2>
            <p class="text-gray-600 dark:text-gray-400">{{ $data['labels']['boardSubtitle'] }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($data['boardMembers'] as $index => $member)
            <div class="bg-white dark:bg-[#221e1a] p-6 rounded-xl border {{ $index === 0 ? 'border-yellow-600 dark:border-yellow-500/50 bg-amber-50 dark:bg-[#2a2520]' : 'border-gray-200 dark:border-[#332e27]' }} shadow-sm hover:shadow-lg transition-shadow text-center py-8">
                <h3 class="font-bold mb-1 {{ $index === 0 ? 'text-yellow-600 dark:text-yellow-500 text-xl' : 'text-gray-900 dark:text-white text-lg' }}">
                    {{ $member['name'] }}
                </h3>
                <p class="text-gray-700 dark:text-gray-300 text-sm mb-2">{{ $member['role'] }}</p>
                <p class="text-gray-500 text-xs">{{ $member['entity'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-8 bg-yellow-50 dark:bg-yellow-500/10 border border-yellow-200 dark:border-yellow-500/30 rounded-lg p-6 flex items-start gap-4 shadow-sm">
            <i data-lucide="shield" class="w-8 h-8 text-yellow-600 dark:text-yellow-500 shrink-0"></i>
            <div>
                <h4 class="text-yellow-600 dark:text-yellow-500 font-bold mb-1">
                    {{ $locale == 'ar' ? 'الحوكمة والشفافية' : 'Governance and Transparency' }}
                </h4>
                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                    {{ $locale == 'ar' 
                        ? 'نلتزم بأعلى معايير حوكمة الشركات والشفافية في جميع عملياتنا، مع التركيز على حماية حقوق المساهمين وتحقيق أفضل العوائد.'
                        : 'We are committed to the highest standards of corporate governance and transparency in all our operations, focusing on protecting shareholders rights and achieving the best returns.' 
                    }}
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
