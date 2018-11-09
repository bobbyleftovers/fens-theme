const { mix } = require('laravel-mix');

mix.js('assets/js/app.js', 'dist')
   .sass('assets/sass/app.scss', 'dist');