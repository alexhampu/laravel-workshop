const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem'
        },
        extend: {
            colors: {
                'primary': '#d81b60',
                'primary-light': '#ff5c8d',
                'primary-dark': '#a00037',
                'secondary': '#1a1831',
                'secondary-light': '#51478f',
                'secondary-dark': '#0d0c1e',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
}
