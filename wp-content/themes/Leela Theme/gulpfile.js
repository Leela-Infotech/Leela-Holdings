const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const fs = require('fs');
const path = require('path');

// Paths
const paths = {
    scss: './styles/sass/**/*.scss', // SCSS source folder
    cssDest: './styles/css'          // Output folder
};

// Ensure destination folder exists
function ensureCssDest(cb) {
    if (!fs.existsSync(paths.cssDest)){
        fs.mkdirSync(paths.cssDest, { recursive: true });
    }
    cb();
}

// Compile, concatenate, and minify SCSS
function styles() {
    return gulp.src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('main.css'))
        .pipe(cleanCSS({ level: 2 }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.cssDest));
}

// Watch SCSS files
function watchFiles() {
    gulp.watch(paths.scss, styles);
}

// Export tasks
exports.styles = gulp.series(ensureCssDest, styles);
exports.watch = gulp.series(ensureCssDest, watchFiles);
exports.default = gulp.series(ensureCssDest, styles, watchFiles);
