import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#ff0000', 
                secondary: '#28a745', 
                accent: '#ffc107', 
                background: '#f4f5f7',
            },
            borderRadius: {
                'lg': '1rem',
            'xl': '1.25rem', 
        },
    },
    plugins: [],
}
};
