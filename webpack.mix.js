const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .styles(['resources/assets/css/vendor/plugins.min.css' ,
        'resources/assets/css/style.min.css' ,
       'resources/assets/css/responsive.min.css'] ,
       'public/css/app-plugins.css');
       mix.copyDirectory('resources/assets/fonts', 'public/fonts');
       mix.copyDirectory('resources/assets/images', 'public/images');
       
mix.postCss('resources/css/app.css', 'public/css', [
        //
    ]).vue();


// mix.js('resources/js/app.js', 'public/js')
//    .postCss(['resources/css/app.css' ,
//     'resources/assets/css/vendor/plugins.min.css' ,
//    'resources/assets/css/style.min.css' ,
//    'resources/assets/css/responsive.min.css'] ,
//     'public/css',[

//     ]).vue();
   //.postCss('resources/assets/css/vendor/plugins.min.css' , 'public/css')
   //.postCss('resources/assets/css/style.min.css' , 'public/css')
   //.postCss('resources/assets/css/responsive.min.css' , 'public/css');

//mix.options({
  //  postCss: [
   //     require('postcss-custom-properties')
   // ]
//}).vue();   

