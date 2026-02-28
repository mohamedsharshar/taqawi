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
                  <td className="p-4 text-gray-600 dark:text-gray-400">42,138,073</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">42,928,587</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.receivables')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">126,350,920</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">127,147,890</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.advancePayments')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">22,756,380</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">23,611,711</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.cash')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">145,620,765</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">41,380,059</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalCurrent')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">336,866,138</td>
                  <td className="p-4 text-gray-900 dark:text-white">235,068,247</td>
                </tr>
                <tr className="font-bold bg-yellow-100 dark:bg-yellow-500/10">
                  <td className="p-4 text-gray-900 dark:text-white text-lg">{t('investors.balance.totalAssets')}</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">779,276,864</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">769,296,485</td>
                </tr>
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.balance.currentLiabilities')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.suppliersPayable')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">52,040,926</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">8,144,944</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.fixedAssetsCreditors')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">5,708,018</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">2,922,662</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.otherCreditors')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">2,740,646</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">359,618</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalCurrentLiabilities')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">60,489,590</td>
                  <td className="p-4 text-gray-900 dark:text-white">11,427,224</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.workingCapital')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">276,376,548</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">223,641,023</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalInvestment')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">718,787,274</td>
                  <td className="p-4 text-gray-900 dark:text-white">757,869,261</td>
                </tr>
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.balance.equity')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.issuedCapital')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">236,500,000</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">350,500,000</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.capitalIncrease')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">101,500,000</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">-</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.netProfitPeriod')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">7,173,983</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">9,220,166</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalEquity')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">345,173,983</td>
                  <td className="p-4 text-gray-900 dark:text-white">359,720,166</td>
                </tr>
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.balance.nonCurrentLiabilities')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.leaseLiabilities')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">373,438,100</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">397,912,530</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.balance.deferredTaxLiabilities')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">175,191</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">236,565</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalNonCurrentLiabilities')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">373,613,291</td>
                  <td className="p-4 text-gray-900 dark:text-white">398,149,095</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.balance.totalLiabilities')}</td>
                  <td className="p-4 text-gray-900 dark:text-white">434,102,881</td>
                  <td className="p-4 text-gray-900 dark:text-white">409,576,319</td>
                </tr>
                <tr className="font-bold bg-yellow-100 dark:bg-yellow-500/10">
                  <td className="p-4 text-gray-900 dark:text-white text-lg">{t('investors.balance.totalEquityAndLiabilities')}</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">779,276,864</td>
                  <td className="p-4 text-gray-900 dark:text-white text-lg">769,296,485</td>
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
                  <td className="p-4 text-red-600 dark:text-red-400">(14,836,159)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(15,875,278)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.formationExpenses')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(1,026,209)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(1,026,209)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.financeCosts')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(30,835)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(36,056)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.purchaseExpenses')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">-</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(83,669)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.foreignExchange')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(341,506)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(287,050)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.creditLosses')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(1,554,595)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(1,012,146)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.depreciation')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(414,517)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(751,144)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.solidarityContribution')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(70,058)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(78,824)</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.income.totalExpenses')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(18,273,879)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(19,150,376)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.otherIncome')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">-</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">7,500</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.interestIncome')}</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">28,023,139</td>
                  <td className="p-4 text-gray-600 dark:text-gray-400">31,522,269</td>
                </tr>
                <tr className="font-bold bg-amber-50 dark:bg-[#221e1a]">
                  <td className="p-4 text-yellow-600 dark:text-yellow-500">{t('investors.income.netProfitBeforeTax')}</td>
                  <td className="p-4 text-green-600 dark:text-green-400">9,749,260</td>
                  <td className="p-4 text-green-600 dark:text-green-400">12,379,393</td>
                </tr>
                <tr><td colSpan="3" className="p-4 text-yellow-600 dark:text-yellow-500 font-bold bg-amber-50 dark:bg-[#221e1a]">{t('investors.income.deductions')}</td></tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.deferredTax')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(175,191)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(236,565)</td>
                </tr>
                <tr className="hover:bg-gray-50 dark:hover:bg-[#221e1a]">
                  <td className="p-4 text-gray-700 dark:text-gray-300">{t('investors.income.incomeTax')}</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(2,400,086)</td>
                  <td className="p-4 text-red-600 dark:text-red-400">(2,922,662)</td>
                </tr>
                <tr className="font-bold bg-yellow-100 dark:bg-yellow-500/10">
                  <td className="p-4 text-gray-900 dark:text-white text-lg">{t('investors.income.netProfit')}</td>
                  <td className="p-4 text-green-600 dark:text-green-400 text-lg">7,173,983</td>
                  <td className="p-4 text-green-600 dark:text-green-400 text-lg">9,220,166</td>
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
