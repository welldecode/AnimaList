const gulp = require("gulp");
const browserSync = require("browser-sync").create();
const gulpSass = require("gulp-sass");
const nodeSass = require("node-sass");
const sass = gulpSass(nodeSass);
const autoprefixer = require("gulp-autoprefixer");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");

function minSass() {
  return gulp
    .src("./public/scss/**/*.scss")
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(
      autoprefixer({ 
        cascade: true,
      })
    )
    .pipe(concat("style.css"))
    .pipe(gulp.dest("public/css/"))
    .pipe(browserSync.stream());
}
gulp.task("minsass", minSass);

function minJS() {
  return gulp
    .src(["./public/js/main.js"])
    .pipe(concat("all.min.js"))
    .pipe(gulp.dest("public/js/"))
    .pipe(browserSync.stream());
}
gulp.task("minjs", minJS);
 
function watch() {
  gulp.watch("./public/scss/*.scss", minSass);
  gulp.watch("assets/js/*.js", minJS);
  gulp.watch(["*.html"]).on("change", browserSync.reload);
}
gulp.task("watch", watch);

function browser() {
  browserSync.init({
    server: {
      baseDir: "./",
    },
  });
}

gulp.task("browser-sync", browser);
gulp.task(
  "default",
  gulp.parallel("watch", "browser-sync",  "minjs", "minsass")
);
