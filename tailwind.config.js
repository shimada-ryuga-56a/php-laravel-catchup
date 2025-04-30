import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    light: '#3ab7bf',
                    DEFAULT: '#0fa9b1',
                    dark: '#0c7c85',
                }
            },
            fontFamily: {
                heading: ['"Noto Sans JP"', 'sans-serif'],
                body: ['"Roboto"', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
