/**
 * Created by michmendar on 6/30/18.
 */
var gulp = require('gulp'),
    gutil = require("gulp-util"),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    uncss = require('gulp-uncss'),
    gcss = require('gulp-group-css-media-queries'),
    browserSync = require('browser-sync').create();

var $ = require('gulp-load-plugins')();

// source and distribution folder
var source = 'src/',
    dest = 'dist/';

var jQuery = {
    in: '.node_modules/jquery'
}

// Bootstrap scss source
var bootstrapSass = {
    in: './node_modules/bootstrap/'
};

var popper = {
    in: './node_modules/popper.js/'
}

var slick = {
    in: './node_modules/slick-carousel/slick/'
}

var sassMQ = {
    in: './node_modules/sass-mq/'
}

// fonts
var fonts = {
    in: [
        source + 'fonts/*.*',
    ],
    out: dest + 'css/fonts/'
};

var jsPaths = [
    jQuery.on + 'dis/jquery.js',
    popper.in + 'dist/umd/popper.js',
    bootstrapSass.in + 'js/dis/util.js',
    bootstrapSass.in + 'js/dist/collapse.js',
    source + 'js/main.js',
];

// css source file: .scss files
var scss = {
    in: source + 'scss/main.scss',
    out: dest + 'css/',
    watch: source + 'scss/**/*',
    sassOpts: {
        outputStyle: 'nested',
        precison: 3,
        errLogToConsole: true,
        includePaths: [
            bootstrapSass.in + 'scss',
            slick.in,
            sassMQ.in,
        ]
    }
};

var taskName = "css:sass";
var onError = function (err) {
    gutil.log(gutil.colors.red("ERROR", taskName), err);
    this.emit("end", new gutil.PluginError(taskName, err, { showStack: true }));
};

// Static Server
gulp.task('serve', ['sass', 'js'], function() {

    //watch files
    var files = [
        './style.css',
        './*.php',
        './*'
    ];

    browserSync.init(files, {
        //browsersync with a php server
        proxy: "localhost:8080/",
        notify: false
    });
});

// copy bootstrap required fonts to dest
gulp.task('fonts', function () {
    return gulp
        .src(fonts.in)
        .pipe(gulp.dest(fonts.out));
});

gulp.task('js', function() {
    return gulp.src(jsPaths)
        .pipe(babel({
            presets: [['env', {
                loose: true,
                modules: false,
                exclude: ['transform-es2015-typeof-symbol']
            }]],
            plugins: ['transform-es2015-modules-strip', '@babel/plugin-proposal-object-rest-spread'],
            compact: false
        }))
        .pipe(concat('main.min.js'))
        .pipe(uglify().on('error', function(e){
            console.log(e);
        }))
        .pipe(gulp.dest(dest+'js/'))
        .pipe(browserSync.reload({ stream: true }));

});

gulp.task('sass', ['fonts'], function() {
    return gulp.src(scss.in)
        .pipe($.sass(scss.sassOpts).on('error', onError))
        .pipe($.autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9', 'iOS 8']
        }))
        .pipe($.groupCssMediaQueries())
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest(dest+'css'))
        .pipe(browserSync.stream());
});

gulp.task('uncss', function() {
    return gulp.src([dest+'css/app.min.css'])
        .pipe(uncss({
            html: [
                './index.php',
            ]
        }))
        .pipe(gulp.dest(dest+'css/'));
});

gulp.task('default', ['serve', 'sass', 'js'], function() {
    gulp.watch([source+'js/*.js'], ['js']);
    gulp.watch([source+'**/*.scss'], ['sass']);
    gulp.watch("*.php").on('change', browserSync.reload);
});