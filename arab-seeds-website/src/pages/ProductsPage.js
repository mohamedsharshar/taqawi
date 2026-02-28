import React from 'react';
import { useTranslation } from 'react-i18next';
import { Leaf, CheckCircle } from 'lucide-react';
import Button from '../components/Button';
import Card from '../components/Card';

const ProductsPage = () => {
  const { t } = useTranslation();

  const productItems = [
    { title: t('products.items.seeds'), desc: t('products.items.seedsDesc'), img: '/images/p1.png' },
    { title: t('products.items.fertilizers'), desc: t('products.items.fertilizersDesc'), img: '/images/p2.png' },
    { title: t('products.items.crops'), desc: t('products.items.cropsDesc'), img: '/images/p3.jpg' },
    { title: t('products.items.irrigation'), desc: t('products.items.irrigationDesc'), img: './images/p4.jpg' },
    { title: t('products.items.livestock'), desc: t('products.items.livestockDesc'), img: './images/p5.png' },
    { title: t('products.items.consulting'), desc: t('products.items.consultingDesc'), img: './images/p6.png' },
  ];

  return (
    <div className="space-y-20 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
      <section className="max-w-6xl mx-auto px-4">
        <div className="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style={{ backgroundImage: 'url(/images/product_hero.jpg)' }}>
          <div className="absolute inset-0 bg-black/50 z-10"></div>
          <div className="z-20 text-center px-4">
            <span className="text-yellow-400 text-sm font-medium">{t('products.hero.tag')}</span>
            <h1 className="text-4xl md:text-5xl font-bold text-white mt-2 mb-4">
              {t('products.hero.title')} <span className="text-yellow-400">{t('products.hero.titleHighlight')}</span>
            </h1>
            <p className="text-gray-100 max-w-2xl mx-auto">
              {t('products.hero.description')}
            </p>
          </div>
        </div>
      </section>

      <section className="max-w-6xl mx-auto px-4">
        <div className="bg-gradient-to-r from-amber-50 to-yellow-50 dark:from-[#2a2520] dark:to-[#2a2520] rounded-2xl overflow-hidden flex flex-col md:flex-row border border-gray-200 dark:border-[#332e27] shadow-lg">
          <div className="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div className="inline-flex items-center gap-2 text-yellow-600 dark:text-yellow-500 mb-4 bg-yellow-100 dark:bg-yellow-500/10 w-fit px-3 py-1 rounded-full text-sm">
              <Leaf className="w-4 h-4" /> {t('products.potato.tag')}
            </div>
            <h2 className="text-3xl font-bold text-gray-900 dark:text-white mb-4">{t('products.potato.title')}</h2>
            <p className="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
              {t('products.potato.description')}
            </p>
            <ul className="space-y-3 mb-8">
              <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> {t('products.potato.feature1')}
              </li>
              <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> {t('products.potato.feature2')}
              </li>
              <li className="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                <CheckCircle className="w-4 h-4 text-yellow-600 dark:text-yellow-500" /> {t('products.potato.feature3')}
              </li>
            </ul>
            <Button className="w-fit">{t('products.potato.cta')}</Button>
          </div>
          <div className="md:w-1/2 bg-amber-100 dark:bg-[#1a1611]">
            <img 
              src="/images/potato2.jpg" 
              alt={t('products.potato.title')}
              className="w-full h-full object-cover"
            />
          </div>
        </div>
      </section>

      <section className="max-w-6xl mx-auto px-4">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {productItems.map((item, idx) => (
            <Card key={idx} className="p-0 overflow-hidden flex flex-col group">
              <div className="h-40 bg-amber-100 dark:bg-[#1a1611] flex items-center justify-center text-gray-500 dark:text-gray-600 border-b border-gray-200 dark:border-[#332e27]">
                {item.img ? (
                  <img 
                    src={item.img} 
                    alt={item.title} 
                    className="w-full h-full object-cover"
                  />
                ) : (
                  '[صورة منتج]'
                )}
              </div>
              <div className="p-5 flex flex-col flex-grow">
                <h3 className="text-lg font-bold text-gray-900 dark:text-white mb-2">{item.title}</h3>
                <p className="text-gray-600 dark:text-gray-400 text-sm mb-4 flex-grow">{item.desc}</p>
                <Button variant="outline" className="w-full text-sm py-1.5">
                  {t('products.items.cta')}
                </Button>
              </div>
            </Card>
          ))}
        </div>
      </section>

      <section className="max-w-6xl mx-auto px-4">
        <div className="bg-gradient-to-r from-yellow-50 to-amber-50 dark:from-[#2a2520] dark:to-[#2a2520] border border-gray-200 dark:border-[#332e27] rounded-xl p-8 flex flex-col md:flex-row justify-between items-center gap-6 shadow-lg">
          <div>
            <h3 className="text-2xl font-bold text-gray-900 dark:text-white mb-2">{t('products.cta.title')}</h3>
            <p className="text-gray-700 dark:text-gray-400">
              {t('products.cta.description')}
            </p>
          </div>
          <div className="flex gap-4 shrink-0">
            <Button>{t('products.cta.button1')}</Button>
            <Button variant="dark">{t('products.cta.button2')}</Button>
          </div>
        </div>
      </section>
    </div>
  );
};

export default ProductsPage;
