/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "../../*.{html, js}"],
  theme: {
    extend: {
      colors: {
        'MyHero': '#675D50',
      },
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}

