var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    /*mix.styles([
        'public/assets/plugins/bootstrap/css/bootstrap.min.css',
        'public/assets/plugins/io-icons.css',
        'public/assets/css/AdminLTE.min.css',
        'public/assets/css/skins/_all-skins.min.css',
        'public/assets/plugins/iCheck/flat/blue.css',
        'public/assets/plugins/sweetAlert/sweetalert.css',
        'public/assets/plugins/editable_bootstrap/css/bootstrap-editable.css'
    ], 'public/assets/css/all.css', './')*/;

    /*mix.scripts([
        'public/assets/plugins/jQuery/jquery-2.2.3.min.js',
        'public/assets/plugins/jQuery/jqueryUi.js',
        'public/assets/plugins/bootstrap/js/bootstrap.min.js',
        'public/assets/plugins/editable_bootstrap/js/bootstrap-editable.min.js',
        'public/assets/js/app.min.js',
        'public/assets/js/demo.js',
        'public/assets/plugins/sweetAlert/sweetalert.min.js'
    ], 'public/assets/js/all.min.js', './');*/
});
