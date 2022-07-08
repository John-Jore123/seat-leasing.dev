const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', '/js')
    .js('resources/js/vendor.js', '/js')
    .sass('resources/sass/app.scss', '/css', {
        processUrls: true,
    })
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version()
    .js('node_modules/aos/dist/aos.js', '/js')
    .js('node_modules/particles.js/particles.js', '/js')
    .js('resources/js/app-particles.js', '/js')
    .css('node_modules/aos/dist/aos.css', '/css')
    .setPublicPath('public/');

mix.copy('resources/images/','public/images', false)

mix.browserSync({
    proxy: "http://localhost:8000"  
})
