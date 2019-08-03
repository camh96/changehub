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
    mix.copy(
      ['./node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js'],
      './resources/assets/js');
    mix.scripts([
      'jquery-2.1.4.min.js',
      'bootstrap.min.js',
      'jquery.throttle-debounce.js',
      'main.js'
    ]);
    mix.copy('./node_modules/bootstrap-sass/assets/fonts/**', 'public/fonts');
    mix.version('css/app.css');
});

