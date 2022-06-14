const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix
.styles([
    'resources/css/base.css',
    'resources/css/magnific.css',
    'resources/css/animated-headlines.css',
    'resources/css/style.css'
],
    'public/css/mixedStyles.css'
)
.scripts([
    'resources/js/modernizr.custom.js',
    'resources/js/jquery.js',
    'resources/js/isotope.js',
    'resources/js/magnific.js',
    'resources/js/animated-headlines.js',
    'resources/js/waypoints.js',
    // 'resources/js/ie8.js',
    'resources/js/init.js',
],
    'public/js/mixedScripts.js'
)
