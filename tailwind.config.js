/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./scripts/*.js", "./*.{html,js}"],
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

