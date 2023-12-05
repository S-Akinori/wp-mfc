/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#FCFCFC',
      'base-color': '#FCFCFC',
      'base-cont': '#888888',
      'main': '#cfdc28',
      'main-cont': '#FCFCFC',
      'accent': '#D1432A',
      'accent-cont': '#ffffff',
    },
    },
  },
  plugins: [],
}
