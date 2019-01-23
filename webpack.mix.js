let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
// mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.less('app.less');
mix.copy('bower_components/bootstrap/dist/fonts', 'public/fonts');
	mix.copy('bower_components/font-awesome/fonts', 'public/fonts');
	mix.styles([
    'bower_components/bootstrap/dist/css/bootstrap.css',
    'bower_components/fontawesome/css/font-awesome.css',
    'resources/css/sb-admin-2.css',
    'resources/css/timeline.css'
], 'public/css/styles.css', './');
mix.scripts([
    'bower_components/jquery/dist/jquery.js',
    'bower_components/bootstrap/dist/js/bootstrap.js',
    'bower_components/Chart.js/Chart.js',
    'bower_components/metisMenu/dist/metisMenu.js',
    'resources/js/sb-admin-2.js',
    'resources/js/frontend.js'
], 'public/js/frontend.js', './');
