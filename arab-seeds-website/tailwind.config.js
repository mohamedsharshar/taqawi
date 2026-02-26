/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          light: '#faf8f5',
          dark: '#1c1813',
        },
        secondary: {
          light: '#f5f1ed',
          dark: '#221e1a',
        },
        card: {
          light: '#ffffff',
          dark: '#2a2520',
        },
        border: {
          light: '#e8dfd5',
          dark: '#332e27',
        },
        yellow: {
          500: '#eab308',
          600: '#c59d5f',
        },
      },
    },
  },
  plugins: [],
}
