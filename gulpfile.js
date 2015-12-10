var gulp = require('gulp');
// var webserver = require('gulp-webserver');
var connect = require('gulp-connect');
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
// var browserSync = require('browser-sync');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var notify = require('gulp-notify');
var sitemap = require('gulp-sitemap');
var clean = require('gulp-clean');
var runSequence = require('run-sequence');
var changed = require('gulp-changed');
var coffeelint = require("gulp-coffeelint");
var coffee = require("gulp-coffee");
var concat = require("gulp-concat");
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');

var paths = {
buildImages: '_build/p2h/**/*.+(png|jpg|gif|svg)',
sass: '_build/sass/**/*.scss',
inc: 'dist/inc/**',
js: 'dist/js/*.js',
coffeescript: '_build/coffeescript/*.coffee'
};
// gulp.task('webserver', function() {
//   gulp.src('./app/')
//     .pipe(webserver({
//       port:1234,
//       livereload: true,
//       directoryListing: false,
//       open: true,
//       fallback: 'index.php'
//     }));
// });

// gulp.task('default',['webserver']);


gulp.task('server', function(){
	connect.server({
		port: 8000,
		livereload: true
	});
});

gulp.task('compass',function(){
    return gulp.src(paths.sass)
		.pipe(plumber({
			errorHandler: function (error) {
				console.log(error.message);
				this.emit('end');
		}}))
        .pipe(compass({
        	config_file: './config.rb',
			// sourcemap: true,
			time: true,
			css: 'dist/css/',
			sass: '_build/sass/'
			// style: 'compact' //nested, expanded, compact, compressed
        }))
        .on('error', function (err) {
        	console.log(err);
        })
        .pipe(gulp.dest('dist/css/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifyCss({
            keepBreaks: true
        }))
        .pipe(gulp.dest('dist/css/'))
        .pipe(connect.reload());
});

gulp.task('html', function(){
	gulp.src('*.+(html|php)')
	.pipe(changed('*.+(html|php)'))
	// .pipe(notify({ message: 'html change' }))
	.pipe(connect.reload());
});

gulp.task('inc', function(){
	gulp.src(paths.inc)
	.pipe(changed(paths.inc))
	// .pipe(notify({ message: 'inc change' }))
	.pipe(connect.reload());
});

gulp.task('js', function(){
	gulp.src(paths.js)
	// .pipe(changed(paths.js))
	.pipe(cache(notify({ message: 'js change' })))
	.pipe(connect.reload());
});

gulp.task('coffee', function () {
    gulp.src(paths.coffeescript) // path to your files
    .pipe(coffeelint()) // lint files
    // .pipe(coffeelint.reporter('fail')) // make sure the task fails if not compliant
    .pipe(concat('test.js')) // concat files
    .pipe(coffee()) // compile coffee
    // .pipe(uglify()) // minify files
    // .pipe(header(getCopyrightVersion(), {version: getVersion()})) // Add the copyright
    .pipe(gulp.dest('dist/js/'));
});

gulp.task('images', ['images-min'] , function(callback){
	return gulp.src(paths.buildImages, {read: true})
	.pipe(clean());
})

gulp.task('images-min', function(file){
  return gulp.src(paths.buildImages)
  .pipe(imagemin({
  	interlaced: true
  }))
  .pipe(gulp.dest('dist/images'))
  .pipe(notify({ message: 'images task complete' }));
});

gulp.task('sitemap', function () {
    gulp.src(['*.+(html|php)', '!config.php'])
        .pipe(sitemap({
                    siteUrl: 'http://localhost/20151013_baby/'
                }))
        .pipe(gulp.dest('_build'))
        .pipe(notify({ message: 'sitemap task complete' }));
});

gulp.task('watch',function(){
    gulp.watch(paths.sass,['compass']);
    gulp.watch('*.+(html|php)', ['html']);
    gulp.watch(paths.inc, ['inc']);
    gulp.watch(paths.js, ['js']);
    gulp.watch(paths.coffeescript, ['coffee']);
    gulp.watch(paths.buildImages, ['images']);
    gulp.watch('*.+(html|php)', ['sitemap']);
});

// gulp.task('default',['server', 'compass', 'watch']);
gulp.task('default', function(callback){
	runSequence(['server', 'compass', 'watch', 'sitemap', 'images'],
		callback
	)
})


// gulp.task('default',['compass','watch']);