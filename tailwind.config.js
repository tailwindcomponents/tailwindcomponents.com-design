module.exports = {
  purge: ['./source/**/*.blade.php'],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['Roboto'],
        'tajawal': ['Tajawal'],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
