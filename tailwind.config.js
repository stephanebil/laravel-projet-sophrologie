const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                bluefirst: "#021a24",
                goldfirst: "#C3994D",
                bluehover: "#093d53",
                goldhover: "#f8d696",
                graybg: "#ecedee",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
