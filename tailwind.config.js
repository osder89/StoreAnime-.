const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                sky: {
                  50: "#f0f9ff",
                  100: "#e0f2fe",
                  200: "#bae6fd",
                  300: "#7dd3fc",
                  400: "#38bdf8",
                  500: "#0ea5e9",
                  600: "#0284c7",
                  700: "#0369a1",
                  800: "#075985",
                  900: "#0c4a6e",
                },
                
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
