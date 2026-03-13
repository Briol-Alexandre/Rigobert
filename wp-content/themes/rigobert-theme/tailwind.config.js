/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./**/*.php",
        "./src/**/*.js",
        "./js/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                background: '#F7F2E6',
                main: '#5D534C'
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
            },
            fontSize: {
                '4.5xl': '2.625rem',
                '5.5xl': '3.25rem',
            },
            margin: {
                'section': '6.25rem',
            },
        },
    },
    safelist: [
        'main-menu',
        'bg-black',
        'flex',
        'justify-between',
        'bg-red-500',
    ],
    plugins: [],
}
