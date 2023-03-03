let mix = require('laravel-mix');

mix.styles([
    'resources/front/css/main.css',
    'resources/front/css/bootstrap.css',
    'resources/front/css/bootstrap.rtl.css',
    'resources/front/css/bootstrap-grid.css',
    'resources/front/css/bootstrap-reboot.css',
    'resources/front/css/bootstrap-grid.rtl.css',
    'resources/front/css/bootstrap-reboot.rtl.css',
    'resources/front/css/bootstrap-utilities.css',
    'resources/front/css/bootstrap-utilities.rtl.css',
],'public/css/styles.css');

mix.scripts([
    'resources/front/js/bootstrap.bundle.js',
    'resources/front/js/bootstrap.esm.js',
    'resources/front/js/bootstrap.js',
],'public/js/scripts.js');

