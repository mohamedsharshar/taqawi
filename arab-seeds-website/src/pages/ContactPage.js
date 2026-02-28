import React from 'react';
import { useTranslation } from 'react-i18next';
import { MapPin, Phone, Mail, ChevronLeft } from 'lucide-react';
import Card from '../components/Card';
import Button from '../components/Button';

const ContactPage = () => {
  const { t } = useTranslation();

  return (
    <div className="space-y-16 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
      <section className="max-w-6xl mx-auto px-4 text-center">
        <h1 className="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">{t('contact.hero.title')}</h1>
        <p className="text-gray-600 dark:text-gray-400">
          {t('contact.hero.description')}
        </p>
      </section>

      <section className="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div className="md:col-span-2">
          <Card>
            <h2 className="text-2xl font-bold text-gray-900 dark:text-white mb-6">{t('contact.form.title')}</h2>
            <form className="space-y-6">
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label className="block text-sm text-gray-600 dark:text-gray-400 mb-2">{t('contact.form.name')}</label>
                  <input 
                    type="text" 
                    placeholder={t('contact.form.namePlaceholder')}
                    className="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500" 
                  />
                </div>
                <div>
                  <label className="block text-sm text-gray-600 dark:text-gray-400 mb-2">{t('contact.form.email')}</label>
                  <input 
                    type="email" 
                    placeholder={t('contact.form.emailPlaceholder')}
                    className="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 text-left dir-ltr" 
                  />
                </div>
              </div>
              <div>
                <label className="block text-sm text-gray-600 dark:text-gray-400 mb-2">{t('contact.form.subject')}</label>
                <select className="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-700 dark:text-gray-400 px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 appearance-none">
                  <option>{t('contact.form.subjectPlaceholder')}</option>
                  <option>{t('contact.form.subjectOptions.products')}</option>
                  <option>{t('contact.form.subjectOptions.investors')}</option>
                  <option>{t('contact.form.subjectOptions.jobs')}</option>
                  <option>{t('contact.form.subjectOptions.other')}</option>
                </select>
              </div>
              <div>
                <label className="block text-sm text-gray-600 dark:text-gray-400 mb-2">{t('contact.form.message')}</label>
                <textarea 
                  rows="5" 
                  placeholder={t('contact.form.messagePlaceholder')}
                  className="w-full bg-white dark:bg-[#1c1813] border border-gray-300 dark:border-[#332e27] text-gray-900 dark:text-white px-4 py-3 rounded-md focus:outline-none focus:border-yellow-600 dark:focus:border-yellow-500 resize-none"
                ></textarea>
              </div>
              <Button type="button" className="w-fit">
                {t('contact.form.submit')} <ChevronLeft className="w-4 h-4" />
              </Button>
            </form>
          </Card>
        </div>

        <div className="md:col-span-1 space-y-6">
          <Card className="h-full">
            <h2 className="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
              <div className="w-2 h-6 bg-yellow-600 dark:bg-yellow-500 rounded"></div>
              {t('contact.info.title')}
            </h2>
            <div className="space-y-6">
              <div className="flex gap-4">
                <div className="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                  <MapPin className="w-5 h-5" />
                </div>
                <div>
                  <h4 className="text-gray-900 dark:text-white font-medium mb-1">{t('contact.info.address')}</h4>
                  <p className="text-gray-600 dark:text-gray-400 text-sm">{t('contact.info.addressValue')}</p>
                </div>
              </div>
              <div className="flex gap-4">
                <div className="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                  <Phone className="w-5 h-5" />
                </div>
                <div>
                  <h4 className="text-gray-900 dark:text-white font-medium mb-1">{t('contact.info.phone')}</h4>
                  <p className="text-gray-600 dark:text-gray-400 text-sm dir-ltr text-right">+20 123 456 7890</p>
                </div>
              </div>
              <div className="flex gap-4">
                <div className="bg-yellow-100 dark:bg-[#332e27] w-10 h-10 rounded-full flex items-center justify-center text-yellow-600 dark:text-yellow-500 shrink-0">
                  <Mail className="w-5 h-5" />
                </div>
                <div>
                  <h4 className="text-gray-900 dark:text-white font-medium mb-1">{t('contact.info.email')}</h4>
                  <p className="text-gray-600 dark:text-gray-400 text-sm">info@arabseeds.com</p>
                </div>
              </div>
            </div>
            <div className="mt-8 pt-8 border-t border-gray-200 dark:border-[#332e27]">
              <h4 className="text-gray-900 dark:text-white font-medium mb-3">{t('contact.info.hours')}</h4>
              <div className="flex justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                <span>{t('contact.info.weekdays')}</span>
                <span>{t('contact.info.weekdaysTime')}</span>
              </div>
              <div className="flex justify-between text-sm text-gray-500">
                <span>{t('contact.info.weekend')}</span>
                <span className="text-yellow-600 dark:text-yellow-500">{t('contact.info.closed')}</span>
              </div>
            </div>
          </Card>
        </div>
      </section>

      <section className="max-w-6xl mx-auto px-4">
        <div className="h-96 bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-[#2a2520] dark:to-[#2a2520] rounded-xl border border-gray-200 dark:border-[#332e27] flex items-center justify-center overflow-hidden relative shadow-lg">
          <div 
            className="absolute inset-0 opacity-10 dark:opacity-20" 
            style={{ 
              backgroundImage: 'radial-gradient(circle at center, #c59d5f 2px, transparent 2px)', 
              backgroundSize: '20px 20px' 
            }}
          ></div>
          <div className="text-center z-10">
            <MapPin className="w-12 h-12 text-yellow-600 dark:text-yellow-500 mx-auto mb-2" />
            <span className="bg-white dark:bg-[#1c1813] text-gray-900 dark:text-white px-4 py-2 rounded shadow-lg border border-gray-200 dark:border-[#332e27]">
              {t('contact.map.title')}
            </span>
          </div>
        </div>
      </section>
    </div>
  );
};

export default ContactPage;
