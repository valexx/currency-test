const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto Flex', ...defaultTheme.fontFamily.serif],
            },
            screens: {
                'xs': '360px',
                'lg': '1440px',
                'max-sm': { 'max': '639px' } //deprecated, do not use. Use mobile-first approach and use 'sm' instead
            },
        },
    },

    future: {
        // don't apply hover on mobile devices https://github.com/tailwindlabs/tailwindcss/pull/8394
        hoverOnlyWhenSupported: true,
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};

