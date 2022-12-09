/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
module.exports = {
  content:[
    './src/**/*.{html,js,}',
   
],
  theme: {
    extend: {},
  },
  corePlugins: {
    aspectRatio: false,
  }, 
 
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}
