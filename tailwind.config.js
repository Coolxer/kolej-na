/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./resources/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                dominant: '#ebf2fa',
                secondary: '#292f36',
                accent: '#23ce6b',
            },
        },
    },
    plugins: [],
};
