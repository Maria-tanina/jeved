const { src, dest, watch, parallel, series } = require('gulp');
const scss = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');



function scripts() {
    return src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/slick-carousel/slick/slick.js',
        'node_modules/swiper/swiper-bundle.js',
        'assets/js/script.js',
    ])
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(dest('assets/js/'));
}

function styles() {
    return src('assets/scss/*.scss')
    .pipe(scss({outputStyle: 'compressed'}))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 10 versions'],
        grid:true
    }))
    .pipe(dest('assets/css'));
}

function watching (){
    watch(['assets/scss/*.scss'], styles);
    watch(['assets/js/**/*.js', '!assets/js/main.min.js'], scripts);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watching = watching;

exports.default = parallel(styles,scripts, watching); 