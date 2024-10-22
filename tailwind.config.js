import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views//*.blade.php',
    './resources/js/**/*.vue',
  ],

  theme: {
    extend: {
      fontFamily: {
        head: ['Outfit', 'Arial', 'sans-serif'],
        body: ['Lato', 'Arial', 'sans-serif'],
      },
      container: {
        padding: {
          DEFAULT: '1rem',
          'sm': '2rem',
          'md': '2rem',
          'lg': '4rem',
          'xl': '5rem',
          '2xl': '6rem',
        },
        center: true,
      },
      fontSize: {
        'd-h1': ['3.7rem', 'bold', '1.2'],
        'd-h2': ['1.875rem', 'semibold', '1.4'],
        'd-h3': ['1.5rem', 'semibold', '1.6'],
        'd-p': ['1rem', 'light', '1.8'],
        'm-h1': ['1.875rem', 'bold ', '1.2'],
        'm-h2': ['1.5rem', 'semibold', '1.4'],
        'm-h3': ['1rem', 'normal', '1.6'],
        'm-p': ['1rem', 'light', '1.8'],
      },
      colors: {
        'primary': '#EFEFEF;',
        'secondary': "#000",
        'gray-50': "#B6B6B6",
      },
      textTransform: {
        'uppercase': 'uppercase',
      },
    },
  },

  plugins: [forms],
};
