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
  .sass('resources/sass/app.scss', 'public/css')
  .copy('resources/theme/css', 'public/theme/css/')
  .copy('resources/theme/flags', 'public/theme/flags/')
  .copy('resources/theme/fonts', 'public/theme/fonts/')
  .copy('resources/theme/icons', 'public/theme/icons/')
  .copy('resources/theme/images', 'public/theme/images/')
  .copy('resources/theme/js', 'public/theme/js/')
  .copy('resources/theme/plugins', 'public/theme/plugins/')
  .sass('resources/theme/scss/style.scss', 'public/css/')
  .version();
