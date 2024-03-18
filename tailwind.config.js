/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: ["./templates/**/*.{twig, html}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Satoshi-Variable", ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'hero-1': "url('/assets/homepagephoto.jpg')",
        'hero-2': "url('/assets/Homepagelogo.jpg')"
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}