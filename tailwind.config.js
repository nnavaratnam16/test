import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
         
    ],

    theme: {
        extend: {
            screens: {
                "custom-screen": '1070px'
            },
            fontFamily: {
                sans: ['Inter','Figtree', ...defaultTheme.fontFamily.sans],
                'open-sans' : ['Open Sans', 'sans-serif']            },
            fontWeight: {
                'default': 600
            },
            fontSize: {
                'small-screen-size': '12px'
            },
            colors: {
                'header-bg': '#393939'
            },
        },
    },

    plugins: [forms],
};
