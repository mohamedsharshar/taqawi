<header class="bg-white dark:bg-[#1c1813] border-b border-gray-200 dark:border-[#332e27] sticky top-0 z-50 transition-colors">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img 
                    src="{{ asset('images/logo.jpg') }}" 
                    alt="التحالف العربي لإنتاج التقاوي" 
                    class="h-14 w-auto object-contain"
                />
                <div>
                    <h1 class="text-gray-900 dark:text-white font-bold text-lg leading-tight">
                        {{ app()->getLocale() == 'ar' ? 'التحالف العربي' : 'Arab Alliance' }}
                    </h1>
                    <p class="text-yellow-600 dark:text-yellow-500 text-xs">
                        {{ app()->getLocale() == 'ar' ? 'لإنتاج التقاوي' : 'for Seeds Production' }}
                    </p>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex gap-6">
                <a href="{{ route('home') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('home') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home' }}
                </a>
                <a href="{{ route('about') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('about') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'عن الشركة' : 'About' }}
                </a>
                <a href="{{ route('products') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('products') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'المنتجات' : 'Products' }}
                </a>
                <a href="{{ route('investors') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('investors') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'علاقات المستثمرين' : 'Investors' }}
                </a>
                <a href="{{ route('shareholders') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('shareholders') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'المساهمون' : 'Shareholders' }}
                </a>
                <a href="{{ route('contact') }}" 
                   class="text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 {{ request()->routeIs('contact') ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' : 'text-gray-700 dark:text-gray-300' }}">
                    {{ app()->getLocale() == 'ar' ? 'اتصل بنا' : 'Contact' }}
                </a>
            </nav>

            <!-- Theme Toggle & Language & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <div class="hidden lg:flex items-center gap-3">
                    <a href="{{ route('lang.switch', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" 
                       class="text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors flex items-center gap-1 text-sm font-medium">
                        <i data-lucide="globe" class="w-5 h-5"></i>
                        <span>{{ app()->getLocale() == 'ar' ? 'EN' : 'عربي' }}</span>
                    </a>
                    <button 
                        onclick="toggleDarkMode()"
                        class="text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">
                        <i data-lucide="sun" class="w-5 h-5 dark:hidden"></i>
                        <i data-lucide="moon" class="w-5 h-5 hidden dark:inline"></i>
                    </button>
                </div>
                <a href="{{ route('lang.switch', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" 
                   class="lg:hidden text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500 text-xs font-medium">
                    {{ app()->getLocale() == 'ar' ? 'EN' : 'عربي' }}
                </a>
                <button 
                    onclick="toggleDarkMode()"
                    class="lg:hidden text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500">
                    <i data-lucide="sun" class="w-5 h-5 dark:hidden"></i>
                    <i data-lucide="moon" class="w-5 h-5 hidden dark:inline"></i>
                </button>
                <button 
                    onclick="toggleMobileMenu()"
                    class="lg:hidden text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                    <i data-lucide="menu" class="w-6 h-6" id="menu-icon"></i>
                    <i data-lucide="x" class="w-6 h-6 hidden" id="close-icon"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-gray-50 dark:bg-[#221e1a] border-b border-gray-200 dark:border-[#332e27]">
        <nav class="flex flex-col px-4 py-2">
            <a href="{{ route('home') }}" class="text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] {{ request()->routeIs('home') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home' }}
            </a>
            <a href="{{ route('about') }}" class="text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] {{ request()->routeIs('about') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'عن الشركة' : 'About' }}
            </a>
            <a href="{{ route('products') }}" class="text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] {{ request()->routeIs('products') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'المنتجات' : 'Products' }}
            </a>
            <a href="{{ route('investors') }}" class="text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] {{ request()->routeIs('investors') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'علاقات المستثمرين' : 'Investors' }}
            </a>
            <a href="{{ route('shareholders') }}" class="text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] {{ request()->routeIs('shareholders') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'المساهمون' : 'Shareholders' }}
            </a>
            <a href="{{ route('contact') }}" class="text-right py-3 text-sm font-medium {{ request()->routeIs('contact') ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300' }}">
                {{ app()->getLocale() == 'ar' ? 'اتصل بنا' : 'Contact' }}
            </a>
        </nav>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        
        lucide.createIcons();
    }
</script>
