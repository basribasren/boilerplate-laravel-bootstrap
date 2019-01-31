let mix = require('laravel-mix');
const webpack = require('webpack');
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
 | Mix Asset Style 
 |--------------------------------------------------------------------------
*/
/* | Mix Asset Style Vendor - dashboard */
// mix.sass('resources/assets/styles/vendor/bootstrap.scss', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/styles/vendor/themify-icons.scss', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/styles/vendor/font-awesome.scss', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/styles/vendor/sparkline.scss', 'public/assets/stylesheets/vendor');
// mix.copy('node_modules/datatables/media/css/jquery.dataTables.css', 'public/assets/stylesheets/vendor');
// mix.copyDirectory('node_modules/datatables/media/images', 'public/assets/images');

/* | Mix Asset Style Vendor - landing */
// mix.copy('resources/assets/styles/vendor/animate.css', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/styles/vendor/magnific-popup.scss', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/styles/vendor/owl.carousel.scss', 'public/assets/stylesheets/vendor');
// mix.copy('resources/assets/styles/vendor/responsive.css', 'public/assets/stylesheets/vendor');
// mix.copy('resources/assets/styles/vendor/slick.css', 'public/assets/stylesheets/vendor');

/* | Mix Asset Style Dashboard */
// mix.sass('resources/assets/styles/dashboard/index.scss', 'public/assets/stylesheets/dashboard');

/* | Mix Asset Style Landing */
// mix.sass('resources/assets/styles/landing/index.scss', 'public/assets/stylesheets/landing');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Script 
 |--------------------------------------------------------------------------
*/
/* | Mix Asset Script Vendor */
mix.js('node_modules/jquery/dist/jquery.js', 'public/assets/scripts/vendor');
mix.js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/assets/scripts/vendor');
mix.js('node_modules/popper.js/dist/popper.js', 'public/assets/scripts/vendor');

/* | Mix Asset Script Dashboard */
mix.js('resources/assets/scripts/dashboard/index.js', 'public/assets/scripts/dashboard');

/* | Mix Asset Script Landing */
mix.js('resources/assets/scripts/landing/index.js', 'public/assets/scripts/landing');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Image 
 |--------------------------------------------------------------------------
*/
/* | Mix Asset Image Dashboard */
mix.copyDirectory('resources/assets/static/images', 'public/assets/images');























/*
 |--------------------------------------------------------------------------
 | Mix Asset Backup
 |--------------------------------------------------------------------------



mix.styles([
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
 */


// mix.copyDirectory('resources/assets/landing', 'public/assets/landing');
// mix.copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css', 'public/assets/stylesheets/vendor');
// mix.copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/assets/stylesheets/vendor');
// mix.copy('node_modules/perfect-scrollbar/css/perfect-scrollbar.css', 'public/assets/stylesheets/vendor');
// mix.sass('resources/assets/landing/css/ionicons.scss', 'public/assets/stylesheets/vendor');
// mix.js('resources/assets/landing/js/slick.min.js', 'public/assets/scripts/landing');
// mix.js('resources/assets/landing/js/footer-reveal.min.js', 'public/assets/scripts/landing');
// mix.js('resources/assets/landing/js/plugins.js', 'public/assets/scripts/landing');