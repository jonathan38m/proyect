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
//mix.setPublicPath('../');
mix.js('resources/js/app.js', 'js')
   .sass('resources/sass/app.scss', 'css/ise.min.css');
mix.js('resources/js/booking.js', 'js');
mix.js('resources/js/counter.js', 'js');
//Formulario de Contacto 
mix.js('resources/js/contact.js', 'js');

mix.js('resources/js/student-info.js', 'js');
mix.js('resources/js/test.js', 'js');
mix.js('resources/js/ancla.js', 'js');
mix.js('resources/js/volunteer.js', 'js');
mix.js('resources/js/datepicker.js', 'js');
