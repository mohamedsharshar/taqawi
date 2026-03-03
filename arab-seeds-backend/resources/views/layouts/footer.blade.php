<footer class="bg-gray-900 dark:bg-black text-white py-12 mt-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Company Info -->
            <div>
                <h3 class="text-yellow-500 font-bold text-lg mb-4">
                    {{ app()->getLocale() == 'ar' ? 'التحالف العربي' : 'Arab Alliance' }}
                </h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    {{ app()->getLocale() == 'ar' ? 'شركة رائدة في إنتاج التقاوي والبذور الزراعية عالية الجودة' : 'Leading company in producing high-quality seeds and agricultural products' }}
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold mb-4">{{ app()->getLocale() == 'ar' ? 'روابط سريعة' : 'Quick Links' }}</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'عن الشركة' : 'About' }}</a></li>
                    <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'المنتجات' : 'Products' }}</a></li>
                    <li><a href="{{ route('investors') }}" class="text-gray-400 hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'علاقات المستثمرين' : 'Investors' }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-yellow-500 transition-colors">{{ app()->getLocale() == 'ar' ? 'اتصل بنا' : 'Contact' }}</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold mb-4">{{ app()->getLocale() == 'ar' ? 'تواصل معنا' : 'Contact Us' }}</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span dir="ltr">+20 2 3854 0123</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        <span>ir@arabseeds.com.eg</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        <span>{{ app()->getLocale() == 'ar' ? 'القاهرة، مصر' : 'Cairo, Egypt' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="font-bold mb-4">{{ app()->getLocale() == 'ar' ? 'تابعنا' : 'Follow Us' }}</h4>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-yellow-600 rounded-full flex items-center justify-center transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-yellow-600 rounded-full flex items-center justify-center transition-colors">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-yellow-600 rounded-full flex items-center justify-center transition-colors">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-6 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} {{ app()->getLocale() == 'ar' ? 'التحالف العربي لإنتاج التقاوي. جميع الحقوق محفوظة.' : 'Arab Alliance for Seeds Production. All rights reserved.' }}</p>
        </div>
    </div>
</footer>
