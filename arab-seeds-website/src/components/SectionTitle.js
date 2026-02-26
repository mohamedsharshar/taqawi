import React from 'react';

const SectionTitle = ({ title, subtitle, className = '' }) => (
  <div className={`text-center mb-12 ${className}`}>
    {subtitle && <h3 className="text-yellow-600 dark:text-yellow-500 font-medium mb-2">{subtitle}</h3>}
    <h2 className="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">{title}</h2>
  </div>
);

export default SectionTitle;
