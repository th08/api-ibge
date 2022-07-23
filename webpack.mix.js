const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.combine([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'public/js/functions.js',
    'node_modules/select2/dist/js/select2.js', 
    'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
],'public/js/app.js');

mix.combine([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'resources/sass/app.scss', 
    'node_modules/select2/dist/css/select2.css'
],'public/css/app.css');