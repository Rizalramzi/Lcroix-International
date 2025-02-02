import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],  
    theme: {
        extend: {
            screens: {
                'xs': '500px',
                'sm': '860px',
                'md': '1080px',
                'lg': '1366px',
                'xl': '1600px',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                main: "#0E2E2E",
                dark: "#323232",
                gray: "#F2F2F2",
            },
            fontSize: {
                xs: ['0.75rem'], // 12px
                sm: ['0.875rem'], // 14px
                base: ['1rem'], // 16px
                lg: ['1.125rem'], // 18px
                xl: ['1.25rem'], // 20px
                '2xl': ['1.5rem'], // 24px
                '3xl': ['1.875rem'], // 30px
                '4xl': ['2.25rem'], // 36px
                '5xl': ['3rem'], // 48px
                '6xl': ['3.75rem'], // 60px
                '7xl': ['4.5rem'], // 72px
                '8xl': ['6rem'], // 96px
                '9xl': ['8rem'], // 128px
            },
        },
    },
    plugins: [],
};
