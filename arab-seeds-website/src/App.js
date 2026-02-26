import React, { useState, useEffect } from 'react';
import './App.css';
import Header from './components/Header';
import Footer from './components/Footer';
import HomePage from './pages/HomePage';
import AboutPage from './pages/AboutPage';
import ProductsPage from './pages/ProductsPage';
import ProjectsPage from './pages/ProjectsPage';
import NewsPage from './pages/NewsPage';
import InvestorsPage from './pages/InvestorsPage';
import ShareholdersPage from './pages/ShareholdersPage';
import ContactPage from './pages/ContactPage';

function App() {
  const [currentPage, setCurrentPage] = useState('home');
  const [isDarkMode, setIsDarkMode] = useState(false);

  useEffect(() => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      setIsDarkMode(true);
      document.documentElement.classList.add('dark');
    }
  }, []);

  const toggleTheme = () => {
    setIsDarkMode(!isDarkMode);
    if (!isDarkMode) {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  };

  const renderPage = () => {
    switch (currentPage) {
      case 'home':
        return <HomePage navigate={setCurrentPage} />;
      case 'about':
        return <AboutPage />;
      case 'products':
        return <ProductsPage />;
      case 'projects':
        return <ProjectsPage />;
      case 'news':
        return <NewsPage />;
      case 'investors':
        return <InvestorsPage />;
      case 'shareholders':
        return <ShareholdersPage />;
      case 'contact':
        return <ContactPage />;
      default:
        return <HomePage navigate={setCurrentPage} />;
    }
  };

  return (
    <div className="App" dir="rtl">
      <Header 
        currentPage={currentPage} 
        setCurrentPage={setCurrentPage}
        isDarkMode={isDarkMode}
        toggleTheme={toggleTheme}
      />
      <main>{renderPage()}</main>
      <Footer />
    </div>
  );
}

export default App;
