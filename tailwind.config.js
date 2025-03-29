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
                'primary': '#00a1e0',
                'secondary': '#6da0e1',
                'tertiary': '#5b62b3',
                'enf-1': '#dec2db',
                'enf-2': '#ede2e0',
                'under': '#fff5fc'
            },
            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
            },
            keyframes: {
                'infinite-scroll': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                }
            }
        },
    },

    plugins: [forms, typography],
};
