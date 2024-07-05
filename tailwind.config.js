/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html"],
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

