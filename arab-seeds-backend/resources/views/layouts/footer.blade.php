<footer class="bg-gray-100 dark:bg-[#15120e] pt-16 pb-8 border-t border-gray-200 dark:border-[#332e27] transition-colors">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12 border-b border-gray-200 dark:border-[#2a2520] pb-12">
            <!-- About Info -->
            <div class="space-y-4">
                <div class="flex items-center gap-2 mb-6">
                    <div class="text-yellow-600 dark:text-yellow-500">
                        <i data-lucide="leaf" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-gray-900 dark:text-white font-bold text-lg">{{ app()->getLocale() == 'ar' ? 'التحالف العربي' : 'Arab Alliance' }}</h2>
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    {{ app()->getLocale() == 'ar' ? 'شركة رائدة في مجال إنتاج واستيراد وتصدير البذور والتقاوي الزراعية، نسعى لتحقيق الأمن الغذائي العربي من خلال حلول زراعية مبتكرة.' : 'A leading company in the production, import and export of agricultural seeds, striving to achieve Arab food security through innovative agricultural solutions.' }}
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-gray-900 dark:text-white font-bold mb-6">{{ app()->getLocale() == 'ar' ? 'روابط سريعة' : 'Quick Links' }}</h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="{{ route('about') }}" class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'عن الشركة' : 'About' }}</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'المنتجات' : 'Products' }}</a></li>
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'الأخبار' : 'News' }}</a></li>
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'المشروعات' : 'Projects' }}</a></li>
                    <li><a href="{{ route('investors') }}" class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'علاقات المستثمرين' : 'Investors' }}</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-gray-900 dark:text-white font-bold mb-6">{{ app()->getLocale() == 'ar' ? 'تواصل معنا' : 'Contact' }}</h3>
                <ul class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0"></i>
                        <span>{{ app()->getLocale() == 'ar' ? 'القاهرة، مصر' : 'Cairo, Egypt' }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0"></i>
                        <span class="dir-ltr">+20 123 456 7890</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0"></i>
                        <span>info@arabseeds.com</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-gray-900 dark:text-white font-bold mb-6">{{ app()->getLocale() == 'ar' ? 'النشرة الإخبارية' : 'Newsletter' }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                    {{ app()->getLocale() == 'ar' ? 'اشترك في نشرتنا الإخبارية لتصلك آخر أخبار التحالف.' : 'Subscribe to our newsletter to receive the latest news from the Alliance.' }}
                </p>
                <div class="flex">
                    <input type="email" placeholder="{{ app()->getLocale() == 'ar' ? 'البريد الإلكتروني' : 'Email' }}" class="bg-white dark:bg-[#221e1a] border border-gray-300 dark:border-[#332e27] border-l-0 text-gray-900 dark:text-white px-3 py-2 rounded-r-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 w-full text-sm">
                    <button class="bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black px-4 py-2 rounded-l-md hover:bg-yellow-700 dark:hover:bg-yellow-600 transition-colors">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
            <p>{{ app()->getLocale() == 'ar' ? '© ٢٠٢٦ التحالف العربي لإنتاج التقاوي. جميع الحقوق محفوظة.' : '© 2026 Arab Alliance for Seeds Production. All rights reserved.' }}</p>
            <div class="flex gap-6">
                <button class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">Privacy Policy</button>
                <button class="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">Terms & Conditions</button>
            </div>
            <div class="flex gap-4">
                <button class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <i data-lucide="facebook" class="w-4 h-4"></i>
                </button>
                <button class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <i data-lucide="twitter" class="w-4 h-4"></i>
                </button>
                <button class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                </button>
            </div>
        </div>
    </div>
</footer>
