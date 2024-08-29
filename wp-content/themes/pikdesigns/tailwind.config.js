/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#245edf',
        secondary: '#8bc6ec',
        warning: '#faad19',
        success: '28a745',
        danger: '#ff3000',
        info: '#245edf',
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
