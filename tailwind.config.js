const colors = require('tailwindcss/colors');

module.exports = {
  purge: ['./source/**/*.blade.php'],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#0ED3CF',
        teal: colors.teal
      },
      fontFamily: {
        'roboto': ['Roboto'],
        'tajawal': ['Tajawal'],
      },
      spacing: {
        128: "32rem",
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
