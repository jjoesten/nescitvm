var gulp = require('gulp');

// Plugins
var pump = require('pump');
var shell = require('gulp-shell');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var cleancss = require('gulp-clean-css');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');

// The order of the files in 'src' are important, be sure to include a file before something else uses it
var jsFiles = [
    {
        name: 'app.js',
        nameMin: 'app.min.js',
        src: [
            
            'app/js/nescitvm/*.js',
            'app/js/*.js',
            'app/js/**/*.js'
        ],
        output: 'public/js'
    }
];

var cssFiles = [
    {
        name: 'app.css',
        nameMin: 'app.min.css',
        src: ['app/css/base.css', 'app/css/*.css', 'app/css/**/*.css'],
        output: 'public/css'
    }
];

gulp.task('default', ['js', 'css']);

gulp.task('js', function(cb) {
    for (var j in jsFiles) {
        pump([
            gulp.src(jsFiles[j].src),
            sourcemaps.init(),
            uglify(),
            concat(jsFiles[j].name),
            rename(jsFiles[j].nameMin),
            sourcemaps.write('.'),
            gulp.dest(jsFiles[j].output),
            notify({
                message: "Finished javascript",
                onLast: true
            })
        ], cb);
    }
});

gulp.task('css', function(cb) {
    for (var c in cssFiles) {
        pump([
            gulp.src(cssFiles[c].src),
            sourcemaps.init(),
            cleancss(),
            concat(cssFiles[c].name),
            rename(cssFiles[c].nameMin),
            sourcemaps.write('.'),
            gulp.dest(cssFiles[c].output),
            notify({
                message: "Finished CSS",
                onLast: true
            })
        ], cb);
    }
});