// Include gulp
var gulp = require('gulp');

// Plugins
var less = require('gulp-less');
var sourcemaps = require('gulp-sourcemaps');
var sftp = require('gulp-sftp');

// compile less
gulp.task('less', function () {
  return gulp.src('./*.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('.'));
});

// ftp
var files = ['*.php', '*.css', 'scripts/*.js', 'images/*'];
gulp.task('upload', function () {
    return gulp.src(files, {base: './'})
        .pipe(sftp({
            host: 'caiters.com',
            remotePath: '/home/ayashi/web/clients/srny/wp-content/themes/SRNY/',
            user: 'ayashi'
        }));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('*.less', ['less']);
    gulp.watch(files, ['upload']);
});

// default task
gulp.task('default', ['less', 'upload', 'watch']);
