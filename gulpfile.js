var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/ceylinrental';
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

    // mix.sass('bootstrap.scss', cssPath + '/bootstrap.min.css')
    //     .sass('theme/theme.scss', cssPath + '/theme.min.css');

   mix.del(['assets/css', 'assets/js']);
   mix.del(themePath+'/**');

   mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css')
        .sass('theme/theme.scss', 'resources/assets/css/theme.min.css');

   mix.copy('resources/assets', 'assets');

   mix.stylistPublish();

});