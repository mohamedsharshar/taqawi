import React from 'react';
import { useTranslation } from 'react-i18next';
import { Download, Briefcase, Calendar } from 'lucide-react';
import Button from '../components/Button';

const InvestorsPage = () => {
  const { t } = useTranslation();
  
  return (
  <div className="space-y-12 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
    <section className="max-w-6xl mx-auto px-4">
      <div className="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 border-b border-gray-200 dark:border-[#332e27] pb-6 gap-4">
        <div>
          <h1 className="text-4xl font-bold text-gray-900 dark:text-white mb-2">{t('investors.hero.title')}</h1>
          <p className="text-gray-600 dark:text-gray-400">{t('investors.hero.description')}</p>
        </div>
        <div className="flex gap-4">
          <button className="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-sm flex items-center gap-2">
            <Briefcase className="w-4 h-4"/> {t('investors.tabs.reports')}
          </button>
          <button className="text-yellow-600 dark:text-yellow-500 text-sm flex items-center gap-2 font-medium border-b border-yellow-600 dark:border-yellow-500 pb-1">
            <Calendar className="w-4 h-4"/> {t('investors.tabs.calendar')}
          </button>
        </div>
      </div>

      <div className="space-y-10">
        <div>
          <div className="flex justify-between items-center mb-4">
            <h2 className="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
              <div className="w-2 h-6 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
              {t('investors.balance.title')}
            </h2>
            <Button variant="outline" className="text-xs py-1.5">
              <Download className="w-4 h-4" /> {t('investors.balance.download')}
            </Button>
          </div>
          <div className="overflow-x-auto rounded-lg border border-gray-200 dark:border-[#332e27] shadow-sm">
            <table className="w-full text-sm text-right">
              <thead className="bg-amber-100 dark:bg-[#2a2520] text-gray-700 dark:text-gray-300">
                <tr>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27] w-1/2">{t('investors.balance.valueInEgp')}</th>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27]">{t('investors.balance.june2025')}</th>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27]">{t('investors.balance.sept2025')}</th>
                </tr>
              </thead>
              <tbody className="bg-white dark:bg-[#1c1813] divide-y divide-gray-200 dark:divide-[#332e27]">
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.balance.nonCurrentAssets')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.fixedAssets')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">5,817,745</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">7,310,480</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.projectsInProgress')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">436,592,981</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">526,917,758</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalNonCurrent')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">442,410,726</td>
                  <td className="p-4 text-gray-900 dark:text-white">534,228,238</td>
                </tr>
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.balance.currentAssets')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.inventory')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">115,100,000</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">140,250,000</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.receivables')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">85,400,000</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">92,100,000</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.cash')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">12,500,000</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">13,200,000</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalCurrent')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">213,000,000</td>
                  <td className="p-4 text-gray-900 dark:text-white">245,550,000</td>
                </tr>
                <tr className="font-bold bg-yellow-100 dark:bg-yellow-500/10">
                  <td className="p-4 text-gray-900 dark:text-white text-lg">{t('investors.balance.totalAssets')}</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">655,410,726</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">779,778,238</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div>
          <h2 className="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
            <div className="w-2 h-6 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
            {t('investors.income.title')}
          </h2>
          <div className="overflow-x-auto rounded-lg border border-gray-200 dark:border-[#332e27] shadow-sm">
            <table className="w-full text-sm text-right">
              <thead className="bg-amber-100 dark:bg-[#2a2520] text-gray-700 dark:text-gray-300">
                <tr>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27] w-1/2">{t('investors.income.valueInEgp')}</th>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27]">{t('investors.income.june2025')}</th>
                  <th className="p-4 border-b border-gray-200 dark:border-[#332e27]">{t('investors.income.sept2025')}</th>
                </tr>
              </thead>
              <tbody className="bg-white dark:bg-[#1c1813] divide-y divide-gray-200 dark:divide-[#332e27]">
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.generalExpenses')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(1,500,000)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(2,050,000)</td>
                </tr>
                <tr className="font-bold bg-yellow-100 dark:bg-yellow-500/10">
                  <td className="p-4 text-gray-900 dark:text-white text-lg">{t('investors.income.netProfit')}</td>
                  <td className="p-4 text-green-600 dark:text-green-400 text-lg">7,170,000</td>
                  <td className="p-4 text-green-600 dark:text-green-400 text-lg">9,220,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  );
};

export default InvestorsPage;
