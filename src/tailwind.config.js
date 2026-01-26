import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Noto Sans JP', ...defaultTheme.fontFamily.sans],
                display: ['Poppins', 'Inter', 'sans-serif'],
                heading: ['Montserrat', 'Noto Sans JP', 'sans-serif'],
                body: ['Inter', 'Noto Sans JP', 'sans-serif'],
                Urbanist: ['Urbanist', 'sans-serif'],
                Poppins: ['Poppins', 'sans-serif'],
                Inter: ['Inter', 'sans-serif'],
                Montserrat: ['Montserrat', 'sans-serif'],
                PlusJakartaSans: ['Plus Jakarta Sans', 'sans-serif'],
            },
            colors: {
                primary_main: '#197fc3',
                primary_gray: '#B0B0B0',
                primary_lighter: '#EAF2FF',
                black_dark: '#1F1F1F',
                black_light: '#3A3A3A',
                bubble_blue: '#4A90E2',
                light_blue: '#F0F8FF',
                gray_light: '#E5E7EB',
                gray_lighter: '#9CA3AF',
                weekly_schedule_orange: '#FFA500',
                border_gray: '#D1D5DB',
                dot: '#E5E5E5',
            },
            spacing: {
                '3.5': '0.875rem',
                '4.5': '1.125rem',
                '5.75': '1.4375rem',
                '10.5': '2.625rem',
                '75': '18.75rem',
                '149': '37.25rem',
                '200': '50rem',
                '239': '59.75rem',
                '420': '105rem',
                '500': '125rem',
                '1116': '279rem',
            },
            borderRadius: {
                '4': '4px',
                '40': '40px',
                '48': '48px',
                'lg': '0.5rem',
                '2xl': '1rem',
            },
            fontSize: {
                'xs': '0.75rem',
                'sm': '0.875rem',
                'base': '1rem',
                '17': '1.0625rem',
                'lg': '1.125rem',
                '2xl': '1.5rem',
                '32': '2rem',
                '40': '2.5rem',
            },
            lineHeight: {
                '1.2': '1.2',
                '1.4': '1.4',
                '1.5': '1.5',
                '1.6': '1.6',
                '1.7': '1.7',
                '1.8': '1.8',
            },
            minHeight: {
                'webkit-fit-content': 'fit-content',
                '124': '31rem',
            },
            maxWidth: {
                '680': '680px',
            },
            maxHeight: {
                'full': '100%',
            },
            animation: {
                'fade-in': 'fadeIn 0.8s ease-out',
                'fade-in-delay': 'fadeIn 1.2s ease-out',
                'slide-up': 'slideUp 0.6s ease-out',
                'bounce-gentle': 'bounceGentle 2s infinite',
                'slide': 'slide 20s linear infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                bounceGentle: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                slide: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
        },
    },

    plugins: [forms],
};