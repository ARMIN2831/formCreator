/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                slider: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
                slider2: {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
                sliderRight: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(100%)' },
                },
                sliderRight2: {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
            },
            animation: {
                'sliderAnimate': 'slider 80s linear infinite',
                'sliderAnimate2': 'slider2 80s linear infinite',
                'sliderAnimateRight': 'sliderRight 80s linear infinite',
                'sliderAnimateRight2': 'sliderRight2 80s linear infinite',
            },
            fontFamily: {
                'arial': 'Arial',
            }
        }
    },
    plugins: [],
}
