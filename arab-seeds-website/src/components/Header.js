import React, { useState } from 'react';
import { Menu, X, Search, Sun, Moon } from 'lucide-react';
import Button from './Button';

const navLinks = [
  { id: 'home', label: 'الرئيسية' },
  { id: 'about', label: 'عن الشركة' },
  { id: 'products', label: 'المنتجات' },
  { id: 'projects', label: 'المشروعات' },
  { id: 'news', label: 'الأخبار' },
  { id: 'investors', label: 'علاقات المستثمرين' },
  { id: 'shareholders', label: 'المساهمون' },
  { id: 'contact', label: 'اتصل بنا' },
];

const Header = ({ currentPage, setCurrentPage, isDarkMode, toggleTheme }) => {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  return (
    <header className="bg-white dark:bg-[#1c1813] border-b border-gray-200 dark:border-[#332e27] sticky top-0 z-50 transition-colors">
      <div className="max-w-7xl mx-auto px-4">
        <div className="flex justify-between items-center h-20">
          {/* Logo */}
          <div 
            className="flex items-center gap-3 cursor-pointer" 
            onClick={() => setCurrentPage('home')}
          >
            <img 
              src="/images/logo.jpg" 
              alt="التحالف العربي لإنتاج التقاوي" 
              className="h-14 w-auto object-contain"
            />
            <div>
              <h1 className="text-gray-900 dark:text-white font-bold text-lg leading-tight">التحالف العربي</h1>
              <p className="text-yellow-600 dark:text-yellow-500 text-xs">لإنتاج التقاوي</p>
            </div>
          </div>

          {/* Desktop Nav */}
          <nav className="hidden lg:flex gap-6">
            {navLinks.map((link) => (
              <button
                key={link.id}
                onClick={() => setCurrentPage(link.id)}
                className={`text-sm font-medium transition-colors hover:text-yellow-600 dark:hover:text-yellow-500 ${
                  currentPage === link.id 
                    ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500 pb-1' 
                    : 'text-gray-700 dark:text-gray-300'
                }`}
              >
                {link.label}
              </button>
            ))}
          </nav>

          {/* Theme Toggle & Login Button & Mobile Toggle */}
          <div className="flex items-center gap-4">
            <div className="hidden lg:flex items-center gap-3">
              <button 
                onClick={toggleTheme}
                className="text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors"
                aria-label="تبديل الوضع"
              >
                {isDarkMode ? <Sun className="w-5 h-5" /> : <Moon className="w-5 h-5" />}
              </button>
              <button className="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <Search className="w-5 h-5" />
              </button>
              <Button variant="outline" className="text-sm py-1.5 px-4">
                تسجيل الدخول
              </Button>
            </div>
            <button 
              onClick={toggleTheme}
              className="lg:hidden text-gray-600 dark:text-gray-400 hover:text-yellow-600 dark:hover:text-yellow-500"
              aria-label="تبديل الوضع"
            >
              {isDarkMode ? <Sun className="w-5 h-5" /> : <Moon className="w-5 h-5" />}
            </button>
            <button 
              className="lg:hidden text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white" 
              onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            >
              {isMobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Menu */}
      {isMobileMenuOpen && (
        <div className="lg:hidden bg-gray-50 dark:bg-[#221e1a] border-b border-gray-200 dark:border-[#332e27]">
          <nav className="flex flex-col px-4 py-2">
            {navLinks.map((link) => (
              <button
                key={link.id}
                onClick={() => { 
                  setCurrentPage(link.id); 
                  setIsMobileMenuOpen(false); 
                }}
                className={`text-right py-3 text-sm font-medium border-b border-gray-200 dark:border-[#332e27] last:border-0 ${
                  currentPage === link.id ? 'text-yellow-600 dark:text-yellow-500' : 'text-gray-700 dark:text-gray-300'
                }`}
              >
                {link.label}
              </button>
            ))}
            <div className="py-4 flex gap-4">
              <Button variant="outline" className="w-full text-sm">
                تسجيل الدخول
              </Button>
            </div>
          </nav>
        </div>
      )}
    </header>
  );
};

export default Header;
