/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
    content: [
      './resources/views/**/*.blade.php',
      './resources/js/**/*.vue',
      './resources/js/**/*.js',
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
