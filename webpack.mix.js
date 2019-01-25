let mix = require('laravel-mix');
const webpack = require('webpack');

// mix.webpackConfig({
//   plugins: [
//     new webpack.ProvidePlugin({
//         '$': 'jquery',
//         'jQuery': 'jquery',
//         'window.jQuery': 'jquery',
//     }),
//   ]
// });

mix.autoload({
 jquery: ['$', 'jQuery', 'window.jQuery'],
});

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
// mix.sass('resources/assets/sass/bootstrap.scss', 'public/assets/')
	// .sass('resources/assets/sass/font-awesome.scss', 'public/assets/stylesheets')
	// .copy('node_modules/metismenu/dist/metisMenu.min.css', 'public/assets/stylesheets/metismenu.css')
	// mix.copy('node_modules/popper.js/dist/popper.js', 'public/assets/scripts')
	// .copy('node_modules/chart.js/dist/Chart.js', 'public/assets/scripts');

mix.styles([
		'node_modules/bootstrap/dist/css/bootstrap.css', 
		'node_modules/@fortawesome/fontawesome-free/css/fontawesome.css', 
		'node_modules/@fortawesome/fontawesome-free/css/brands.css', 
		'node_modules/@fortawesome/fontawesome-free/css/solid.css', 
		'node_modules/metismenu/dist/metisMenu.css',
	    'resources/assets/css/sb-admin-2.css',
	    'resources/assets/css/timeline.css'
	], 'public/assets/stylesheets/styles.css')
	.version();

mix.js([
	    'node_modules/jquery/dist/jquery.js',
	    'node_modules/bootstrap/dist/js/bootstrap.js',
	    'node_modules/popper.js/dist/popper.js',
	    'node_modules/chart.js/dist/Chart.js',
	    'node_modules/metismenu/dist/metisMenu.js',
	    'resources/assets/js/sb-admin-2.js',
	    'resources/assets/js/frontend.js'
	], 'public/assets/scripts/scripts.js')
	.version();

