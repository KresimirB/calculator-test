var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var babel = require('gulp-babel');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

gulp.task('pozovi', function() {
    console.log('di si sokre');
});

gulp.task('scss', function(){
    return gulp.src('production/scss/**/*.scss')
           .pipe(sass())
           .pipe(gulp.dest('production/css'))
           .pipe(browserSync.reload({
               stream: true
           }))
});

gulp.task('watch', ['browserSync', 'scss'], function(){
    gulp.watch('production/scss/**/*.scss', ['scss']);
    gulp.watch('production/*.html', browserSync.reload);
    gulp.watch('production/js/**/*.js', browserSync.reload);
})

gulp.task('browserSync', function() {
    browserSync.init({
      server: {
        baseDir: 'production'
      },
    })
  })

  gulp.task('useref', function(){
    return gulp.src('production/*.html')
    // .pipe(babel({
    //     presets: ['es2015']
    // }))
    //   .pipe(useref())

    //   // Minifies only if it's a JavaScript file
    //   .pipe(gulpIf('*.js', uglify()))

      .pipe(gulpIf('*.css', cssnano()))
      .pipe(gulp.dest('distribution'))
  });
  gulp.task('minifyjs', () => {
    return gulp.src('production/js/index.js')
    .pipe(babel({
        presets: ['es2015']
    }))
    .pipe(uglify())
    .pipe(rename('index.min.js'))
    .pipe(gulp.dest('distribution/js'))
});
gulp.task('minifycss', () =>{
    return gulp.src('production/css/style.css')
        .pipe(cssnano())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('distribution/css'))
  });