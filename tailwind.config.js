import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                rubik: "'Rubik', sans-serif",
                sans: ['Figtree', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'primary': '#44355B',
                'secondary': '#31263E',
                'tertiary': '#221E22',
                'enf-1': 'ECA72C',
                'enf-2': 'EE5622'
            }
        },
    },

    plugins: [forms, typography],
};
