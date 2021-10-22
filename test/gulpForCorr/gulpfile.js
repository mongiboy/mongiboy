const {src, dest, parallel, series, watch,} = require('gulp');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const php = require('gulp-connect-php');

const prepro = 'sass';

//!Проверить пути к файлам!

function connectPHP(){
    php.server({
        base: '.',
        keepalive: true,
        hostname: '0.0.0.0',
        port: 8010,
        bin: "C:/php/php.exe",
        // open: false,
    },function(){
        browserSync.init({
            proxy: '127.0.0.1:8010',
            browser: 'firefox',
            port: 8080,
            notify: false,
            online: true,
        });
    });
}

function scripts(){
    return src([
        'js/script.js',
    ])
    .pipe(concat('script.min.js'))
    .pipe(uglify())
    .pipe(dest('js'))
    .pipe(browserSync.stream())
}

function styles(){
    return src(prepro +'/main.'+ prepro)
    .pipe(sass())
    .pipe(concat('style.min.css'))
    .pipe(autoprefixer({overrideBrowserslist: ['last 10 versions'], grid: true}))
    .pipe(cleancss(({level: { 1: { specialComments: 0 }} /*,format: 'beautify'*/})))
    .pipe(dest('css/'))
    .pipe(browserSync.stream())
}

function startwatch(){
    watch(prepro +'/*.' +prepro, styles);
    watch(['**/*.js', '!**/*.min.js'], scripts);
    watch('**/*.php').on('change', browserSync.reload);
}

exports.scripts    = scripts; 
exports.styles     = styles; 
exports.connectPHP = connectPHP;

exports.default = parallel(styles, scripts, connectPHP, startwatch);