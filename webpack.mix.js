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

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/registration.js', 'public/js')
  .js('resources/js/User.js', 'public/js')
  .js('resources/js/Company.js', 'public/js')
  .js('resources/js/profile/user_profile.js', 'public/js')
  .js('resources/js/profile/comp_profile.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css');
