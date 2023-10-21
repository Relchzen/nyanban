/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        teal: '#186F65',
        jade: '#B5CB99',
        cream: '#FCE09B',
        maroon: '#B2533E',
        darkcream: '#E1AA74',
        dark: '#473C33',
        light: '#FFF9C9'
      },
      fontFamily: {
        comfortaa: 'Comfortaa'
      }
    },
  },
  plugins: [],
}

