var gulp = require('gulp'),
		sass = require('gulp-sass'),
		plumber = require('gulp-plumber'),
		autoprefixer = require('gulp-autoprefixer'),
		jshint = require('gulp-jshint'),
		concat = require('gulp-concat'),
		notify = require('gulp-notify');

gulp.task('default', ['styles', 'jshint', 'watch']);

gulp.task('styles', function() {
	return gulp.src('sass/**/*.scss')
		.pipe(plumber({
			errorHandler: notify.onError("Error: <%= error.message %>")
			}))
		.pipe(sass({
			'sourcemap=none': true,
			errLogToConsole: true
		}))
		.pipe(concat('style.css'))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
		.pipe(gulp.dest('.'))
		.pipe(notify("Regenerated CSS! ( <%= file.relative %> )"));
});

gulp.task('jshint', function() {
	return gulp.src('js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'))
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);
	gulp.watch('js/*.js', ['jshint']);
});