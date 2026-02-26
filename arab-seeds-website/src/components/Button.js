import React from 'react';

const Button = ({ children, variant = 'primary', className = '', ...props }) => {
  const baseStyle = "px-6 py-2 rounded-md font-medium transition-colors duration-200 flex items-center justify-center gap-2 cursor-pointer";
  
  const variants = {
    primary: "bg-yellow-600 dark:bg-yellow-500 text-white dark:text-black hover:bg-yellow-700 dark:hover:bg-yellow-600",
    outline: "border-2 border-yellow-600 dark:border-yellow-500 text-yellow-600 dark:text-yellow-500 hover:bg-yellow-600 dark:hover:bg-yellow-500 hover:text-white dark:hover:text-black",
    dark: "bg-gray-100 dark:bg-[#2a2520] text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-[#36302a]"
  };

  return (
    <button 
      className={`${baseStyle} ${variants[variant]} ${className}`} 
      {...props}
    >
      {children}
    </button>
  );
};

export default Button;
