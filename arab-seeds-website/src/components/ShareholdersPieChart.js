import React, { useEffect, useState } from 'react';
import { Pie } from 'react-chartjs-2';
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js';
import ChartDataLabels from 'chartjs-plugin-datalabels';
import { useTranslation } from 'react-i18next';

ChartJS.register(ArcElement, Tooltip, Legend, ChartDataLabels);

const ShareholdersPieChart = () => {
  const { t, i18n } = useTranslation();
  const isRTL = i18n.language === 'ar';
  const [isDark, setIsDark] = useState(document.documentElement.classList.contains('dark'));

  useEffect(() => {
    const observer = new MutationObserver(() => {
      const newIsDark = document.documentElement.classList.contains('dark');
      console.log('Dark mode changed:', newIsDark);
      setIsDark(newIsDark);
    });
    
    observer.observe(document.documentElement, {
      attributes: true,
      attributeFilter: ['class'],
    });

    return () => observer.disconnect();
  }, []);

  const data = {
    labels: [
      t('shareholders.companies.international'),
      t('shareholders.companies.safa'),
      t('shareholders.companies.egyptian'),
      t('shareholders.companies.bank'),
      t('shareholders.companies.taiba'),
      t('shareholders.companies.egyptianAgri'),
      t('shareholders.companies.cropos'),
      t('shareholders.companies.research'),
      t('shareholders.companies.egyptianAgriSeeds'),
      t('shareholders.companies.international2'),
      t('shareholders.companies.union'),
      t('shareholders.companies.cooperative'),
    ],
    datasets: [
      {
        data: [32.82, 21.36, 10.29, 12.24, 11.19, 4.90, 2.20, 1.47, 1.80, 1.25, 0.33, 0.16],
        backgroundColor: [
          '#60a5fa', // blue-400 - الشركة الدولية
          '#fb923c', // orange-400 - الصفا
          '#9ca3af', // gray-400 - المصرية الفرنسية
          '#fbbf24', // yellow-400 - البنك الزراعي
          '#334155', // slate-700 - طيبة
          '#10b981', // emerald-500 - إيجاست
          '#a855f7', // purple-500 - كروبوس
          '#ec4899', // pink-500 - الوحدة البحثية
          '#06b6d4', // cyan-500 - إيجاسيد
          '#f59e0b', // amber-500 - الدولية للأسمدة
          '#6366f1', // indigo-500 - الاتحاد العام
          '#14b8a6', // teal-500 - الجمعية التعاونية
        ],
        borderColor: '#1c1813',
        borderWidth: 2,
        hoverBorderWidth: 3,
        hoverBorderColor: '#fbbf24',
      },
    ],
  };

  const options = {
    responsive: true,
    maintainAspectRatio: false,
    layout: {
      padding: 20,
    },
    plugins: {
      datalabels: {
        color: '#ffffff',
        font: {
          size: 13,
          weight: 'bold',
          family: isRTL ? 'Cairo, sans-serif' : 'Inter, sans-serif',
        },
        formatter: (value, context) => {
          // Only show percentage for slices larger than 2%
          if (value >= 2) {
            return `${value}%`;
          }
          return '';
        },
        anchor: 'center',
        align: 'center',
        offset: 0,
        textStrokeColor: '#1c1813',
        textStrokeWidth: 2,
      },
      legend: {
        position: 'bottom',
        rtl: isRTL,
        labels: {
          color: isDark ? '#ffffff' : '#1f2937',
          font: {
            size: 12,
            family: isRTL ? 'Cairo, sans-serif' : 'Inter, sans-serif',
            weight: '600',
          },
          padding: 15,
          usePointStyle: true,
          pointStyle: 'circle',
          boxWidth: 12,
          boxHeight: 12,
          generateLabels: (chart) => {
            const datasets = chart.data.datasets;
            return chart.data.labels.map((label, i) => {
              const value = datasets[0].data[i];
              return {
                text: `${label} (${value}%)`,
                fillStyle: datasets[0].backgroundColor[i],
                strokeStyle: datasets[0].backgroundColor[i],
                hidden: false,
                index: i,
                fontColor: isDark ? '#ffffff' : '#000000',
              };
            });
          },
        },
      },
      tooltip: {
        rtl: isRTL,
        backgroundColor: 'rgba(28, 24, 19, 0.95)',
        titleColor: '#fbbf24',
        bodyColor: '#e5e7eb',
        borderColor: '#fbbf24',
        borderWidth: 1,
        padding: 12,
        displayColors: true,
        boxWidth: 12,
        boxHeight: 12,
        usePointStyle: true,
        titleFont: {
          size: 13,
          weight: 'bold',
        },
        bodyFont: {
          size: 12,
        },
        callbacks: {
          label: function(context) {
            const value = context.parsed || 0;
            return ` ${value}%`;
          },
          title: function(context) {
            return context[0].label;
          }
        }
      },
    },
  };

  return (
    <div className="w-full h-[550px] flex items-center justify-center">
      <Pie key={isDark ? 'dark' : 'light'} data={data} options={options} />
    </div>
  );
};

export default ShareholdersPieChart;
