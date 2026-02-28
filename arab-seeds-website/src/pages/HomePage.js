import React from 'react';
import { useTranslation } from 'react-i18next';
import { Calendar, Briefcase, Leaf, Droplet, Shield, TrendingUp, Users } from 'lucide-react';
import Button from '../components/Button';
import Card from '../components/Card';
import SectionTitle from '../components/SectionTitle';

const HomePage = ({ navigate }) => {
  const { t } = useTranslation();
  
  const businessSectors = [
    { 
      icon: <Leaf className="w-8 h-8" />, 
      title: t('home.sectors.potato'), 
      desc: t('home.sectors.potatoDesc')
    },
    { 
      icon: <Droplet className="w-8 h-8" />, 
      title: t('home.sectors.fertilizers'), 
      desc: t('home.sectors.fertilizersDesc')
    },
    { 
      icon: <Shield className="w-8 h-8" />, 
      title: t('home.sectors.irrigation'), 
      desc: t('home.sectors.irrigationDesc')
    },
    { 
      icon: <TrendingUp className="w-8 h-8" />, 
      title: t('home.sectors.pesticides'), 
      desc: t('home.sectors.pesticidesDesc')
    },
    { 
      icon: <Leaf className="w-8 h-8" />, 
      title: t('home.sectors.improvedSeeds'), 
      desc: t('home.sectors.improvedSeedsDesc')
    },
    { 
      icon: <Users className="w-8 h-8" />, 
      title: t('home.sectors.consulting'), 
      desc: t('home.sectors.consultingDesc')
    },
  ];

  return (
    <div className="space-y-20 pb-20 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
      {/* Hero Section */}
      <section className="relative pt-32 pb-20 text-center px-4 bg-cover bg-center bg-no-repeat" style={{ backgroundImage: 'url(/images/img1.jpeg)' }}>
        {/* Overlay for better text readability */}
        <div className="absolute inset-0 bg-black/50"></div>
        
        <div className="relative z-10 max-w-4xl mx-auto space-y-6">
          <h3 className="text-yellow-400 font-medium tracking-wide">{t('home.hero.tag')}</h3>
          <h1 className="text-5xl md:text-7xl font-bold text-white leading-tight">
            {t('home.hero.title')}
          </h1>
          <p className="text-xl text-gray-100 max-w-2xl mx-auto">
            {t('home.hero.description')}
          </p>
          <div className="flex justify-center gap-4 pt-6">
            <Button onClick={() => navigate('about')}>{t('home.hero.cta1')}</Button>
            <Button variant="dark" onClick={() => navigate('investors')}>
              {t('home.hero.cta2')}
            </Button>
          </div>
        </div>
      </section>

      {/* Info Cards */}
      <section className="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
        <Card className="flex items-center justify-between">
          <div>
            <p className="text-gray-500 dark:text-gray-400 text-sm">{t('home.info.foundingYear')}</p>
            <p className="text-3xl font-bold text-gray-900 dark:text-white mt-1">{t('home.info.foundingYearValue')}</p>
          </div>
          <div className="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
            <Calendar className="w-8 h-8" />
          </div>
        </Card>
        <Card className="flex items-center justify-between">
          <div>
            <p className="text-gray-500 dark:text-gray-400 text-sm">{t('home.info.legalForm')}</p>
            <p className="text-3xl font-bold text-gray-900 dark:text-white mt-1">{t('home.info.legalFormValue')}</p>
          </div>
          <div className="bg-yellow-100 dark:bg-yellow-500/10 p-4 rounded-full text-yellow-600 dark:text-yellow-500">
            <Briefcase className="w-8 h-8" />
          </div>
        </Card>
      </section>

      {/* Business Sectors */}
      <section className="max-w-6xl mx-auto px-4">
        <SectionTitle title={t('home.sectors.title')} subtitle={t('home.sectors.subtitle')} />
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {businessSectors.map((sector, idx) => (
            <Card key={idx} className="text-center group">
              <div className="text-yellow-600 dark:text-yellow-500 flex justify-center mb-4 transform group-hover:scale-110 transition-transform">
                {sector.icon}
              </div>
              <h3 className="text-xl font-bold text-gray-900 dark:text-white mb-2">{sector.title}</h3>
              <p className="text-gray-600 dark:text-gray-400 text-sm">{sector.desc}</p>
            </Card>
          ))}
        </div>
      </section>

      {/* Financial Indicators */}
      <section className="max-w-6xl mx-auto px-4 pt-10 border-t border-gray-200 dark:border-[#332e27]">
        <SectionTitle title={t('home.financial.title')} subtitle={t('home.financial.subtitle')} />
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
          {[
            { label: t('home.financial.netProfit'), value: '7.17M', unit: t('home.financial.currency'), sub: t('home.financial.netProfitSub') },
            { label: t('home.financial.targetProfit'), value: '9.22M', unit: t('home.financial.currency'), sub: t('home.financial.targetProfitSub') },
            { label: t('home.financial.totalAssets'), value: '779M', unit: t('home.financial.currency'), sub: t('home.financial.totalAssetsSub') },
            { label: t('home.financial.capital'), value: '612.5M', unit: t('home.financial.currency'), sub: t('home.financial.capitalSub') },
          ].map((stat, idx) => (
            <div key={idx} className="border-r border-gray-200 dark:border-[#332e27] last:border-0 px-4">
              <p className="text-gray-500 dark:text-gray-400 text-sm mb-2">{stat.label}</p>
              <p className="text-4xl font-bold text-gray-900 dark:text-white mb-1">
                {stat.value} <span className="text-lg text-yellow-600 dark:text-yellow-500">{stat.unit}</span>
              </p>
              <p className="text-xs text-gray-500 flex justify-center items-center gap-1">
                {idx === 0 && <TrendingUp className="w-3 h-3 text-green-500" />}
                {stat.sub}
              </p>
            </div>
          ))}
        </div>
      </section>
    </div>
  );
};

export default HomePage;
