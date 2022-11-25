const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js}",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        // './resources/**/*.vue',
        // './resources/**/*js',
       
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans], ['Inter', 'sans-serif'];
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio')], 
};
