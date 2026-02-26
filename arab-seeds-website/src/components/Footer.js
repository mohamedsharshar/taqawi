import React from 'react';
import { Leaf, MapPin, Phone, Mail, ChevronLeft, Facebook, Twitter, Linkedin } from 'lucide-react';

const Footer = () => (
  <footer className="bg-gray-100 dark:bg-[#15120e] pt-16 pb-8 border-t border-gray-200 dark:border-[#332e27] transition-colors">
    <div className="max-w-7xl mx-auto px-4">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12 border-b border-gray-200 dark:border-[#2a2520] pb-12">
        {/* About Info */}
        <div className="space-y-4">
          <div className="flex items-center gap-2 mb-6">
            <div className="text-yellow-600 dark:text-yellow-500">
              <Leaf className="w-6 h-6" />
            </div>
            <h2 className="text-gray-900 dark:text-white font-bold text-lg">التحالف العربي</h2>
          </div>
          <p className="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
            التحالف العربي لإنتاج التقاوي هي شركة رائدة في مجال الإنتاج الزراعي، تهدف إلى تقديم حلول متكاملة لمزارع أفضل باستخدام أحدث التقنيات العالمية.
          </p>
        </div>

        {/* Quick Links */}
        <div>
          <h3 className="text-gray-900 dark:text-white font-bold mb-6">روابط سريعة</h3>
          <ul className="space-y-3 text-sm text-gray-600 dark:text-gray-400">
            <li><button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">عن الشركة</button></li>
            <li><button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">المنتجات والخدمات</button></li>
            <li><button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">المركز الإعلامي</button></li>
            <li><button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">الوظائف</button></li>
            <li><button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">علاقات المستثمرين</button></li>
          </ul>
        </div>

        {/* Contact */}
        <div>
          <h3 className="text-gray-900 dark:text-white font-bold mb-6">تواصل معنا</h3>
          <ul className="space-y-4 text-sm text-gray-600 dark:text-gray-400">
            <li className="flex items-start gap-3">
              <MapPin className="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0" />
              <span>القاهرة، جمهورية مصر العربية</span>
            </li>
            <li className="flex items-start gap-3">
              <Phone className="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0" />
              <span className="dir-ltr">+20 123 456 7890</span>
            </li>
            <li className="flex items-start gap-3">
              <Mail className="w-5 h-5 text-yellow-600 dark:text-yellow-500 shrink-0" />
              <span>info@arabseeds.com</span>
            </li>
          </ul>
        </div>

        {/* Newsletter */}
        <div>
          <h3 className="text-gray-900 dark:text-white font-bold mb-6">النشرة البريدية</h3>
          <p className="text-gray-600 dark:text-gray-400 text-sm mb-4">
            اشترك لتصلك أحدث التقارير المالية والزراعية.
          </p>
          <div className="flex">
            <input 
              type="email" 
              placeholder="البريد الإلكتروني" 
              className="bg-white dark:bg-[#221e1a] border border-gray-300 dark:border-[#332e27] border-l-0 text-gray-900 dark:text-white px-3 py-2 rounded-r-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 w-full text-sm" 
            />
            <button className="bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black px-4 py-2 rounded-l-md hover:bg-yellow-700 dark:hover:bg-yellow-600 transition-colors">
              <ChevronLeft className="w-5 h-5" />
            </button>
          </div>
        </div>
      </div>

      <div className="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
        <p>© 2024 التحالف العربي لإنتاج التقاوي. جميع الحقوق محفوظة.</p>
        <div className="flex gap-6">
          <button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">سياسة الخصوصية</button>
          <button className="hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors">الشروط والأحكام</button>
        </div>
        <div className="flex gap-4">
          <button className="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <Facebook className="w-4 h-4" />
          </button>
          <button className="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <Twitter className="w-4 h-4" />
          </button>
          <button className="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <Linkedin className="w-4 h-4" />
          </button>
        </div>
      </div>
    </div>
  </footer>
);

export default Footer;
