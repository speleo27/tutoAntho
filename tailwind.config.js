// tailwind.config.js
module.exports = {
    purge:{
        // in dev put on false for prod pass on true to minify weigth of file
        enabled:false,

     content:
         [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
