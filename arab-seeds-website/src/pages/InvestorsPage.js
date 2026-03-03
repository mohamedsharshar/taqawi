import React, { useState, useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import { Download, Briefcase, Calendar, FileText, Users, Mail, Phone } from 'lucide-react';
import { getFinancialStatements, getMeetingMinutes, getIrManager } from '../services/api';

const InvestorsPage = () => {
  const { t, i18n } = useTranslation();
  const [financialStatements, setFinancialStatements] = useState([]);
  const [meetingMinutes, setMeetingMinutes] = useState([]);
  const [irManager, setIrManager] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const [statementsRes, minutesRes, managerRes] = await Promise.all([
          getFinancialStatements(),
          getMeetingMinutes(),
          getIrManager(),
        ]);
        
        setFinancialStatements(statementsRes.data || []);
        setMeetingMinutes(minutesRes.data || []);
        setIrManager(managerRes.data);
      } catch (error) {
        console.error('Error fetching investor relations data:', error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  // Helper function to get translated text
  const getTranslation = (obj, field) => {
    if (!obj || !obj[field]) return '';
    
    // If it's already a string, return it
    if (typeof obj[field] === 'string') return obj[field];
    
    // If it's an object with translations, get the current language
    const currentLang = i18n.language;
    return obj[field][currentLang] || obj[field]['ar'] || obj[field]['en'] || '';
  };
  
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

        {/* الأقسام الثلاثة الجديدة */}
        {loading ? (
          <div className="text-center py-10">
            <div className="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-yellow-600"></div>
          </div>
        ) : (
          <div className="grid md:grid-cols-3 gap-6">
            {/* القوائم المالية */}
            <div className="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
              <div className="flex items-center gap-3 mb-4">
                <div className="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                  <FileText className="w-6 h-6 text-yellow-600 dark:text-yellow-500" />
                </div>
                <h3 className="text-lg font-bold text-gray-900 dark:text-white">{t('investors.financialStatements.title')}</h3>
              </div>
              <p className="text-gray-600 dark:text-gray-400 text-sm mb-4">{t('investors.financialStatements.description')}</p>
              
              {financialStatements.length > 0 ? (
                <div className="space-y-2 mb-4">
                  {financialStatements.slice(0, 3).map((statement) => (
                    <a
                      key={statement.id}
                      href={statement.file_url}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="block p-2 hover:bg-gray-50 dark:hover:bg-[#1c1813] rounded text-sm"
                    >
                      <div className="flex items-center justify-between">
                        <span className="text-gray-700 dark:text-gray-300">
                          {getTranslation(statement, 'title')}
                        </span>
                        <Download className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                      </div>
                      <span className="text-xs text-gray-500">
                        {new Date(statement.statement_date).toLocaleDateString(i18n.language === 'ar' ? 'ar-EG' : 'en-US')}
                      </span>
                    </a>
                  ))}
                </div>
              ) : (
                <p className="text-sm text-gray-500 dark:text-gray-400 mb-4">لا توجد قوائم مالية متاحة حالياً</p>
              )}
            </div>

            {/* محاضر الجمعيات ومجالس الإدارة */}
            <div className="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
              <div className="flex items-center gap-3 mb-4">
                <div className="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                  <Users className="w-6 h-6 text-yellow-600 dark:text-yellow-500" />
                </div>
                <h3 className="text-lg font-bold text-gray-900 dark:text-white">{t('investors.minutes.title')}</h3>
              </div>
              <p className="text-gray-600 dark:text-gray-400 text-sm mb-4">{t('investors.minutes.description')}</p>
              
              {meetingMinutes.length > 0 ? (
                <div className="space-y-2 mb-4">
                  {meetingMinutes.slice(0, 3).map((minute) => (
                    <a
                      key={minute.id}
                      href={minute.file_url}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="block p-2 hover:bg-gray-50 dark:hover:bg-[#1c1813] rounded text-sm"
                    >
                      <div className="flex items-center justify-between">
                        <span className="text-gray-700 dark:text-gray-300">
                          {getTranslation(minute, 'title')}
                        </span>
                        <Download className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                      </div>
                      <span className="text-xs text-gray-500">
                        {new Date(minute.meeting_date).toLocaleDateString(i18n.language === 'ar' ? 'ar-EG' : 'en-US')}
                      </span>
                    </a>
                  ))}
                </div>
              ) : (
                <p className="text-sm text-gray-500 dark:text-gray-400 mb-4">لا توجد محاضر متاحة حالياً</p>
              )}
            </div>

            {/* مدير علاقات المستثمرين */}
            <div className="bg-white dark:bg-[#221e1a] rounded-lg border border-gray-200 dark:border-[#332e27] p-6 hover:shadow-lg transition-shadow">
              <div className="flex items-center gap-3 mb-4">
                <div className="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/10 rounded-lg flex items-center justify-center">
                  <Mail className="w-6 h-6 text-yellow-600 dark:text-yellow-500" />
                </div>
                <h3 className="text-lg font-bold text-gray-900 dark:text-white">{t('investors.irManager.title')}</h3>
              </div>
              
              {irManager ? (
                <div className="space-y-3">
                  <div>
                    <p className="text-xs text-gray-500 dark:text-gray-500 mb-1">{t('investors.irManager.name')}</p>
                    <p className="text-sm font-medium text-gray-900 dark:text-white">
                      {getTranslation(irManager, 'name')}
                    </p>
                    <p className="text-xs text-gray-500 dark:text-gray-400">
                      {getTranslation(irManager, 'position')}
                    </p>
                  </div>
                  <div className="flex items-center gap-2">
                    <Phone className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                    <div>
                      <p className="text-xs text-gray-500 dark:text-gray-500">{t('investors.irManager.phone')}</p>
                      <a href={`tel:${irManager.phone}`} className="text-sm text-gray-900 dark:text-white hover:text-yellow-600">
                        {irManager.phone}
                      </a>
                    </div>
                  </div>
                  <div className="flex items-center gap-2">
                    <Mail className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                    <div>
                      <p className="text-xs text-gray-500 dark:text-gray-500">{t('investors.irManager.email')}</p>
                      <a href={`mailto:${irManager.email}`} className="text-sm text-gray-900 dark:text-white hover:text-yellow-600">
                        {irManager.email}
                      </a>
                    </div>
                  </div>
                </div>
              ) : (
                <div className="space-y-3">
                  <div>
                    <p className="text-xs text-gray-500 dark:text-gray-500 mb-1">{t('investors.irManager.name')}</p>
                    <p className="text-sm font-medium text-gray-900 dark:text-white">{t('investors.irManager.nameValue')}</p>
                  </div>
                  <div className="flex items-center gap-2">
                    <Phone className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                    <div>
                      <p className="text-xs text-gray-500 dark:text-gray-500">{t('investors.irManager.phone')}</p>
                      <p className="text-sm text-gray-900 dark:text-white">{t('investors.irManager.phoneValue')}</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-2">
                    <Mail className="w-4 h-4 text-yellow-600 dark:text-yellow-500" />
                    <div>
                      <p className="text-xs text-gray-500 dark:text-gray-500">{t('investors.irManager.email')}</p>
                      <p className="text-sm text-gray-900 dark:text-white">{t('investors.irManager.emailValue')}</p>
                    </div>
                  </div>
                </div>
              )}
            </div>
          </div>
        )}
      </section>
    </div>
  );
};

export default InvestorsPage;
