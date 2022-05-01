const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [     './resources/**/*.blade.php',
  './resources/**/*.js',
  './resources/**/*.vue',],
    darkMode:false,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'regal-blue': '#243c5a',
              },
              lineClamp:{  // add customize tailwind clamp-line ex in class line-clamp-10 line-clamp-12 after 10 ||12 line will truncted
                  10:"10",
                  12:"12",

              }
        },
    },
    variants:{
        extend:{
            lineClamp:["hover"],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/line-clamp')],

};
