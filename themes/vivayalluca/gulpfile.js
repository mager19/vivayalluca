const gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var reload = browserSync.reload;

gulp.task('sass', function () {
    gulp.src('./sass/*main.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
})

// Watch scss AND html files, doing different things with each.
gulp.task('serve', function () {

    //Variables para que sepa que archivos refrescar
    var files = [
        './css/main.css',
        './*.php',
        './js/*.js',
        './inc/*.php',
        './tribe-events/*.php',
        '**/*.js',
        // include specific files and folders
        'screenshot.png',
    ];

    // Serve files from the root of this project
    browserSync.init(files, {
        proxy: "https://vivayalluca.local/",
        https: {
            key: "/Applications/MAMP/Library/OpenSSL/certs/localhost.key",
            cert: "/Applications/MAMP/Library/OpenSSL/certs/localhost.crt"
        }
    });


});


gulp.task('default', ['sass', 'serve'], function () {
    gulp.watch("sass/**/*.scss", ['sass']);

});
