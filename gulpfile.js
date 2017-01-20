var gulp = require('gulp'),
    //auxiliar plugins
    
    notify = require("gulp-notify")
    runSequence = require('run-sequence')
    
    //main plugins
    gutil = require('gulp-util')
    uglify = require('gulp-uglify')
    imagemin = require('gulp-imagemin')
    sass = require('gulp-sass')
    bower = require('gulp-bower')
    pngquant = require('imagemin-pngquant');

/**
 * Config
 **/

var config = {
    devPath: './app/webroot/sass',
    bowerDir: './app/webroot/bower_components'
}

gulp.task('default', function(callback) {
    runSequence('bower', 'sass',
        callback
    )
});

/**
 * Bower
 * Install bower dependencies
 **/

gulp.task('bower', function() {
  return bower();
});

/**
 * SASS
 **/

gulp.task('sass', function() {
    return gulp.src(config.devPath + '/globalstyles.scss')
        .pipe(sass({
            style: 'compressed',
            includePaths: [
                './app/webroot/sass',
                config.bowerDir + '/bootstrap-sass/assets/stylesheets'
            ]
        })
        .on("error", notify.onError(function (error) {
            return "Error: " + error.message;
        })))
        .pipe(gulp.dest('./app/webroot/css'));
});

// Keep watching sass files
gulp.task('watch', function() {
    gulp.watch(config.devPath + '/**/*.scss', ['sass']);
});
