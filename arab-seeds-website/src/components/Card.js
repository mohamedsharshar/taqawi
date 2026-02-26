import React from 'react';

const Card = ({ children, className = '' }) => (
  <div className={`bg-white dark:bg-[#221e1a] border border-gray-200 dark:border-[#332e27] rounded-lg p-6 hover:border-yellow-600 dark:hover:border-yellow-500/50 transition-colors shadow-sm ${className}`}>
    {children}
  </div>
);

export default Card;
