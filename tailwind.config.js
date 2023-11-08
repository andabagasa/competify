/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            primary: {
                100: '#E8EEFF',
                200: '#8EAAFF',
                300: '#3366FF',
                400: '#0033CC',
                500: '#001A66',
            }
        },
        fontFamily: {
            worksans: ['Work Sans', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

