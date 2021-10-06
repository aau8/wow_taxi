// let project_name = require('path').basename(__dirname),
let project_name = 'themes/transfer-wp',
    src_folder = '#src'

let gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass')(require('sass')),
    sourceMaps = require('gulp-sourcemaps'),
    fileinclude = require("gulp-file-include");
    cssMin = require('gulp-minify-css'),
    del = require('del'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload

let path = {
  build: {
    php: project_name + '/',
    css: project_name + '/assets/css/',
    js: project_name + '/assets/js/',
    vendor: project_name + '/assets/vendor/',
    img: project_name + '/assets/img/',
    video: project_name + '/assets/video/',
    documents: project_name + '/assets/documents/',
    // json: project_name + '/'
  },
  src: {
    php: src_folder + '/**/*.php',
    css: [src_folder + '/scss/**/*.scss', '!' + src_folder + '/scss/**/_*.scss'],
    vendor: src_folder + '/vendor/**/*',
    js: src_folder + '/js/main.js',
    img: src_folder + '/img/**/*',
    video: src_folder + '/video/**/*',
    documents: src_folder + '/documents/**/*',
    // json: src_folder + '/**/*.json'
  },
  watch: {
    php: src_folder + '/**/*.php',
    css: src_folder + '/scss/**/*.scss',
    vendor: src_folder + '/vendor/**/*',
    js: src_folder + '/js/**/*.js',
    img: src_folder + '/img/**/*',
    video: src_folder + '/video/**/*',
    documents: src_folder + '/documents/**/*',
    // json: src_folder + '/**/*.json'
  },
  clean: [project_name + '/*.php', project_name + '/assets/css/', project_name + '/assets/js/']
}

function webServer() {
  browserSync.init({
    proxy: "wordpress", // Для работы с OpenServer (php) указываем папку, с которой работаем в OpenServer.
    // server: {
    //   baseDir: './' + project_name + '/'
    // },
    notify: false,
    port: 3000
  })
}

function phpBuild() {
  return gulp.src(path.src.php)
    .pipe(gulp.dest(path.build.php))
    .pipe(reload({stream: true}))
}

function jsBuild() {
  return gulp.src(path.src.js)
    .pipe(fileinclude())
    .pipe(sourceMaps.init())
    .pipe(uglify())
    .pipe(sourceMaps.write())
    .pipe(gulp.dest(path.build.js))
    .pipe(reload({stream: true}))
}

function styleBuild() {
  return gulp.src(path.src.css)
    .pipe(sourceMaps.init())
    .pipe(sass())
    .pipe(autoprefixer({
      grid: true,
      overrideBrowserslist: ['last 5 versions']
    }))
    .pipe(cssMin())
    .pipe(sourceMaps.write())
    .pipe(gulp.dest(path.build.css))
    .pipe(reload({stream: true}))
}

function vendorBuild() {
  return gulp.src(path.src.vendor)
    .pipe(gulp.dest(path.build.vendor))
    .pipe(reload({stream: true}))
}

function imagesBuild() {
  return gulp.src(path.src.img)
    .pipe(gulp.dest(path.build.img))
    .pipe(reload({stream: true}))
}

function videosBuild() {
  return gulp.src(path.src.video)
    .pipe(gulp.dest(path.build.video))
    .pipe(reload({stream: true}))
}

function documentsBuild() {
  return gulp.src(path.src.documents)
    .pipe(gulp.dest(path.build.documents))
    .pipe(reload({stream: true}))
}

function clean(callback) {
  return del(path.clean, callback)
}

function watchFiles() {
  gulp.watch([path.watch.php], phpBuild)
  gulp.watch([path.watch.js], jsBuild)
  gulp.watch([path.watch.css], styleBuild)
  gulp.watch([path.watch.vendor], vendorBuild)
  gulp.watch([path.watch.img], imagesBuild)
  gulp.watch([path.watch.video], videosBuild)
  gulp.watch([path.watch.documents], documentsBuild)
}

let build = gulp.series(clean, gulp.parallel(phpBuild, jsBuild, styleBuild), vendorBuild, imagesBuild, videosBuild, documentsBuild)
let watch = gulp.parallel(build, watchFiles, webServer)

exports.php = phpBuild
exports.css = styleBuild
exports.js = jsBuild
exports.vendor = vendorBuild
exports.images = imagesBuild
exports.videos = videosBuild
exports.docs = documentsBuild
exports.clean = clean
exports.build = build
exports.watch = watch
exports.default = watch