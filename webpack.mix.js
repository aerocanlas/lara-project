let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');
mix.css('src/app.css', 'dist').setPublicPath('dist');