var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/Themes/Qbicom';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

//    mix.sass('bootstrap.scss', cssPath + '/bootstrap.min.css')
//        .sass('style.scss', cssPath + '/style.min.css');

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css', 'resources/assets/vendor/bootstrap-sass/assets/stylesheets')
        .sass('style.scss', 'resources/assets/css/style.min.css');

    mix.scripts([
        "jquery.themepunch.tools.min.js",
        "jquery.themepunch.revolution.min.js",
        "extensions/revolution.extension.actions.min.js",
        "extensions/revolution.extension.carousel.min.js",
        "extensions/revolution.extension.kenburn.min.js",
        "extensions/revolution.extension.layeranimation.min.js",
        "extensions/revolution.extension.migration.min.js",
        "extensions/revolution.extension.navigation.min.js",
        "extensions/revolution.extension.parallax.min.js",
        "extensions/revolution.extension.slideanims.min.js",
        "extensions/revolution.extension.video.min.js"
    ], 'resources/assets/js/revolution-slider.min.js', 'resources/assets/vendor/revo-slider/js');

    mix.styles([
        'bootstrap.min.css',
        'style.min.css',
        '../vendor/layerslider/css/layerslider.css',
        '../vendor/flag-icon-css/css/flag-icon.min.css'
    ], 'resources/assets/css/all.min.css');

    mix.scripts([
       'main.js'
    ], 'resources/assets/js/main.min.js', 'resources/assets/js');

    mix.copy('assets/vendor/bootstrap-sass/assets/fonts', 'resources/assets/fonts')
        .copy('resources/assets', 'assets');

    mix.version([
        'css/style.min.css',
        'css/all.min.css'
    ], 'assets');

    mix.stylistPublish();

});