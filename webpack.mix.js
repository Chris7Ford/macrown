const mix = require('laravel-mix');
const MixGlob = require('laravel-mix-glob');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const mixGlob = new MixGlob({
    mix,
    //mapping: {
    //
    //}
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/tailwind.css', 'public/css', [
      require('tailwindcss'),
    ])
    .postCss('resources/css/normalize.css', 'public/css');

mixGlob
  .sass('resources/views/**/*.scss', 'public/css')
  .ts('resources/views/**/*.ts', 'public/js')
