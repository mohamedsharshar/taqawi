import React from 'react';
import { useTranslation } from 'react-i18next';
import { Calendar, Mail, ChevronLeft } from 'lucide-react';
import Card from '../components/Card';
import Button from '../components/Button';

const NewsPage = () => {
  const { t } = useTranslation();

  const newsList = [
    { 
      title: t('news.items.news1.title'),
      date: t('news.items.news1.date'),
      tag: t('news.items.news1.tag'),
      img: 'https://images.pexels.com/photos/265216/pexels-photo-265216.jpeg?auto=compress&cs=tinysrgb&w=800'
    },
    { 
      title: t('news.items.news2.title'),
      date: t('news.items.news2.date'),
      tag: t('news.items.news2.tag'),
      img: 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&auto=format&fit=crop'
    },
    { 
      title: t('news.items.news3.title'),
      date: t('news.items.news3.date'),
      tag: t('news.items.news3.tag'),
      img: './images/img2.jpeg'
    },
  ];

  return (
    <div className="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
      <section className="max-w-6xl mx-auto px-4">
        <div className="h-64 bg-cover bg-center bg-no-repeat rounded-2xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style={{ backgroundImage: 'url(/images/news.png)' }}>
          <div className="absolute inset-0 bg-black/50 z-10"></div>
          <div className="text-center z-10 px-4">
            <span className="text-yellow-400 text-sm font-medium mb-2 inline-block">{t('news.hero.tag')}</span>
            <h1 className="text-4xl md:text-5xl font-bold text-white mb-4">{t('news.hero.title')}</h1>
            <p className="text-gray-100">{t('news.hero.description')}</p>
          </div>
        </div>

        <div className="flex gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8 overflow-x-auto">
          {[t('news.tabs.company'), t('news.tabs.agriculture'), t('news.tabs.press'), t('news.tabs.reports')].map((tab, idx) => (
            <button 
              key={idx} 
              className={`pb-3 px-2 font-medium text-sm whitespace-nowrap transition-colors ${
                idx === 0 
                  ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500' 
                  : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white'
              }`}
            >
              {tab}
            </button>
          ))}
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          {newsList.map((news, idx) => (
            <Card key={idx} className="p-0 overflow-hidden group hover:border-yellow-600 dark:hover:border-yellow-500/50">
              <div className="h-48 bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-[#1a1611] dark:to-[#1a1611] relative">
                <img 
                  src={news.img} 
                  alt={news.title} 
                  className="w-full h-full object-cover"
                />
                <span className="absolute top-4 right-4 bg-white/90 dark:bg-[#1c1813]/80 text-gray-900 dark:text-white text-xs px-2 py-1 rounded backdrop-blur-sm shadow-sm">
                  {news.tag}
                </span>
              </div>
              <div className="p-6">
                <p className="text-yellow-600 dark:text-yellow-500 text-xs mb-2 flex items-center gap-1">
                  <Calendar className="w-3 h-3" /> {news.date}
                </p>
                <h3 className="text-lg font-bold text-gray-900 dark:text-white mb-4 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors leading-snug">
                  {news.title}
                </h3>
                <button className="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white flex items-center gap-1">
                  {t('news.readMore')} <ChevronLeft className="w-4 h-4" />
                </button>
              </div>
            </Card>
          ))}
        </div>
      </section>

      <section className="max-w-4xl mx-auto px-4">
        <Card className="text-center p-10 bg-gradient-to-b from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#1c1813] border-t-4 border-yellow-600 dark:border-yellow-500 shadow-xl">
          <div className="bg-yellow-100 dark:bg-yellow-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-yellow-600 dark:text-yellow-500">
            <Mail className="w-8 h-8" />
          </div>
          <h2 className="text-2xl font-bold text-gray-900 dark:text-white mb-2">{t('news.newsletter.title')}</h2>
          <p className="text-gray-600 dark:text-gray-400 mb-8 max-w-lg mx-auto">
            {t('news.newsletter.description')}
          </p>
          <form className="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
            <input 
              type="email" 
              placeholder={t('news.newsletter.placeholder')}
              className="bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-2 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 flex-grow text-left dir-ltr" 
            />
            <Button type="button">{t('news.newsletter.button')}</Button>
          </form>
          <p className="text-xs text-gray-500 mt-4">{t('news.newsletter.privacy')}</p>
        </Card>
      </section>
    </div>
  );
};

export default NewsPage;
