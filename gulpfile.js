var paths = {
	'BOWER': './vendor/bower_components/',
	'DESTINATION': './public/assets/',
	'SOURCE': './resources/assets/',
    'NODE': './node_modules/',
	'FOUNDATION': './node_modules/foundation-sites/',
	'VIEWS': './resources/views/',
}

var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.copy(paths.SOURCE + 'images', paths.DESTINATION + 'images');
    mix.copy(paths.SOURCE + 'vendor', paths.DESTINATION + 'vendor');

    mix.sass('style.scss', paths.DESTINATION + 'css/style.css', {
        includePaths: [
            paths.FOUNDATION + 'scss'
        ]
    });

    mix.browserify(paths.SOURCE + 'js/app.js', paths.DESTINATION + 'js/package.js', './');

});
