/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            blue : '#125C9D',
            blueLight : '#F5F5F5',
            black : '#343434',
            purple : '#4F129D',
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

