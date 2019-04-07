const mix = require('laravel-mix');
mix
   .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version()
   .styles([
      'swiper/dist/css/swiper.css',
      'public/css/vendor/normalize.css',
      'public/css/vendor/videojs.css'
   ], 'public/css/all.css');



   // const mix = require('laravel-mix');

// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
