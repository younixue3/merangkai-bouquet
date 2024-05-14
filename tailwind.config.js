/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'outfit': 'Outfit, sans-serif',
            'dancing-script': 'Dancing Script, cursive',
            'philosopher': 'Philosopher',
        },
        extend: {},
    },
    plugins: [],
}
