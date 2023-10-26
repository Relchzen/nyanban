/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        teal: '#99B080',
        jade: '#B5CB99',
        cream: '#FCE09B',
        maroon: '#B2533E',
        lightmaroon: '#AD4E3A',
        active: '#C08261',
        darkcream: '#E1AA74',
        dark: '#473C33',
        light: '#FAF3F0',
        red: '#F15A59'
      },
      fontFamily: {
        comfortaa: 'Comfortaa',
        roboto: 'Roboto'
      }
    },
  },
  plugins: [],
}

