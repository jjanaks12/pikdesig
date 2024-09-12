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
        base: '#1c2b33'
      }, // Extend Tailwind's default colors
      spacing: {
        'c80': '5rem', // 80px
        'c50': '3.125rem', // 50px
        'c60': '3.75rem', // 60px
        'c70': '4.375rem', // 70px
        'c133': '8.3125rem', // 133px
      },
      fontSize: {
        'c32': '2rem' // 32px
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '0.9375rem'
        },
        screens: {
          '2xl': '77rem'
        }
      }
    },
  },
  plugins: [],
};

export default config;
