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


const path = require('path');



mix.js('resources/assets/js/setup/app.js', 'public/js')
   	.sass('resources/assets/sass/app.scss', 'public/css')
	.webpackConfig({
	   resolve: {
		    alias: { 
		        'sass': path.join(__dirname, 'resources/assets/sass')
		    }
		}
	});




