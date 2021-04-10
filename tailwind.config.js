const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                green:{
                  100:'#009200',
                  150:'#1E8449',
                  200:'#8CBE11',
                  300:'#808000',
                  400:'#34D399', 
                },
                grey:{
                  100:'#d6d7d8',
                  200:'#A9A9A9',
                  300:'#808080'
                },
                blue:{
                    100:'#3B5499',
                },
                red:{
                    100:'#E72F2F',
                }
              },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
