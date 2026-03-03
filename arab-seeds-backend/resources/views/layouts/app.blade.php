<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1c1813">
    <meta name="description" content="{{ app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي - شركة رائدة في مجال الإنتاج الزراعي' : 'Arab Alliance for Seeds Production - Leading company in agricultural production' }}">
    
    <title>@yield('title', app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي' : 'Arab Alliance for Seeds Production')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        * {
            font-family: 'Cairo', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #faf8f5;
            color: #2c2520;
            transition: background-color 0.3s ease, color 0.3s ease;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .dark body {
            background-color: #1c1813;
            color: #e5e5e5;
        }
        
        /* Smooth transitions */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        
        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f5f1ed;
        }
        
        .dark ::-webkit-scrollbar-track {
            background: #1c1813;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #d4c5b9;
            border-radius: 5px;
        }
        
        .dark ::-webkit-scrollbar-thumb {
            background: #332e27;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #c59d5f;
        }
        
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #eab308;
        }
        
        .dir-ltr {
            direction: ltr;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white">
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Dark mode toggle
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }
        
        // Load dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    </script>
    
    @stack('scripts')
</body>
</html>
