import React from 'react';
import { useTranslation } from 'react-i18next';
import { ChevronLeft } from 'lucide-react';
import Card from '../components/Card';

const ProjectsPage = () => {
  const { t } = useTranslation();

  const projectsList = [
    { 
      title: t('projects.items.irrigation.title'),
      desc: t('projects.items.irrigation.desc'),
      status: t('projects.items.irrigation.status'),
      img: 'https://images.pexels.com/photos/2132250/pexels-photo-2132250.jpeg?auto=compress&cs=tinysrgb&w=800'
    },
    { 
      title: t('projects.items.desert.title'),
      desc: t('projects.items.desert.desc'),
      status: t('projects.items.desert.status'),
      img: './images/desert2png.png'
    },
    { 
      title: t('projects.items.greenhouse.title'),
      desc: t('projects.items.greenhouse.desc'),
      status: t('projects.items.greenhouse.status'),
      img: './images/sob.jpg'
    },
    { 
      title: t('projects.items.vertical.title'),
      desc: t('projects.items.vertical.desc'),
      status: t('projects.items.vertical.status'),
      img: './images/agr.jpg'
    },
    { 
      title: t('projects.items.seedProduction.title'),
      desc: t('projects.items.seedProduction.desc'),
      status: t('projects.items.seedProduction.status'),
      img: './images/taq.jpg'
    },
    { 
      title: t('projects.items.drone.title'),
      desc: t('projects.items.drone.desc'),
      status: t('projects.items.drone.status'),
      img: 'https://images.pexels.com/photos/442587/pexels-photo-442587.jpeg?auto=compress&cs=tinysrgb&w=800'
    },
  ];

  return (
    <div className="space-y-12 pb-20 pt-10 bg-gradient-to-b from-amber-50 to-white dark:from-[#1c1813] dark:to-[#1c1813]">
      <section className="max-w-6xl mx-auto px-4">
        <div className="h-64 bg-cover bg-center bg-no-repeat rounded-xl flex items-center justify-center relative overflow-hidden mb-12 shadow-lg" style={{ backgroundImage: 'url(/images/projects_hero.jpg)' }}>
          <div className="absolute inset-0 bg-black/50 z-10"></div>
          <div className="z-20 text-center px-4">
            <h1 className="text-4xl font-bold text-white mb-4">{t('projects.hero.title')}</h1>
            <p className="text-gray-100">{t('projects.hero.description')}</p>
          </div>
        </div>
      </section>

      <section className="max-w-6xl mx-auto px-4">
        <div className="flex justify-center gap-6 border-b border-gray-200 dark:border-[#332e27] mb-8">
          {[t('projects.tabs.all'), t('projects.tabs.ongoing'), t('projects.tabs.future')].map((tab, idx) => (
            <button 
              key={idx} 
              className={`pb-3 px-2 font-medium text-sm transition-colors ${
                idx === 0 
                  ? 'text-yellow-600 dark:text-yellow-500 border-b-2 border-yellow-600 dark:border-yellow-500' 
                  : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white'
              }`}
            >
              {tab}
            </button>
          ))}
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {projectsList.map((project, idx) => (
            <Card key={idx} className="p-0 overflow-hidden group">
              <div className="relative h-48 bg-amber-100 dark:bg-[#1a1611]">
                <img 
                  src={project.img} 
                  alt={project.title} 
                  className="w-full h-full object-cover"
                />
                <span className="absolute top-4 right-4 bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black text-xs font-bold px-2 py-1 rounded shadow-lg">
                  {project.status}
                </span>
              </div>
              <div className="p-6">
                <h3 className="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-yellow-600 dark:group-hover:text-yellow-500 transition-colors">
                  {project.title}
                </h3>
                <p className="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3">{project.desc}</p>
                <button className="text-yellow-600 dark:text-yellow-500 text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all">
                  {t('projects.readMore')} <ChevronLeft className="w-4 h-4" />
                </button>
              </div>
            </Card>
          ))}
        </div>
      </section>
    </div>
  );
};

export default ProjectsPage;
