/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        head: [ 'Roboto', ...defaultTheme.fontFamily.sans ],
        lead: "'Poppins', sans-serif",
      },
      backgroundImage: {
        'first-hero-image': "url('/images/hear-bg.jpg')",
        'second-hero-image': "url('/images/sub-bg.jpg')",
        'third-hero-image': "url('/images/third-bg.jpg')",
        'fourth-hero-image': "url('/images/last-bg.jpg')",
        'fifth-hero-image': "url('/images/latter-bg.jpg')",
      },
      dropShadow: {
        '2xl': '0px 8px 5px rgba(0, 0, 0, 1)',
        '4xl': '15px 15px 30px rgb(0, 0, 0)',
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        'java': {
          DEFAULT: '#43c1c4',
          '50': '#f6fcfc', 
          '100': '#ecf9f9', 
          '200': '#d0f0f0', 
          '300': '#b4e6e7', 
          '400': '#7bd4d6', 
          '500': '#43c1c4', 
          '600': '#3caeb0', 
          '700': '#329193', 
          '800': '#287476', 
          '900': '#215f60'
        },
        'firefly': {
          DEFAULT: '#072429',
          '50': '#f3f4f4', 
          '100': '#e6e9ea', 
          '200': '#c1c8ca', 
          '300': '#9ca7a9', 
          '400': '#516669', 
          '500': '#072429', 
          '600': '#062025', 
          '700': '#051b1f', 
          '800': '#041619', 
          '900': '#031214'
        },
        'casal': {
          DEFAULT: '#1e6470',
          '50': '#f4f7f8', 
          '100': '#e9f0f1', 
          '200': '#c7d8db', 
          '300': '#a5c1c6', 
          '400': '#62939b', 
          '500': '#1e6470', 
          '600': '#1b5a65', 
          '700': '#174b54', 
          '800': '#123c43', 
          '900': '#0f3137'
        },
      },
      screens: {
        'sm': { 'max': '640px' },
        'md': { 'max': '768px' },
        'lg': { 'max': '1024px' },
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
  ],
}
