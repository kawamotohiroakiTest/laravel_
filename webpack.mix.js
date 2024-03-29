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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();


// mix.js( 'resources/js/app.js', 'public/js' ).autoload( {
//     "jquery": [ '$', 'window.jQuery' ],
// } ).postCss( 'resources/css/app.css', 'public/css', [
//     require( 'postcss-import' ),
//     require( 'tailwindcss' ),
//     require( 'autoprefixer' ),
// ] );

mix.ts( 'resources/ts/app.tsx', 'public/js' ).autoload( {
} ).sass( 'resources/sass/app.scss', 'public/css');

if (mix.inProduction()){
    mix.version();
}
