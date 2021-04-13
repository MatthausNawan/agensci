const mix = require('laravel-mix');

mix
    .sass('resources/sass/frontend/agensci.scss', 'public/frontend/css/agensci.css')
    .sourceMaps(true, 'source-map')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/frontend/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/frontend/js/bootstrap.js');


