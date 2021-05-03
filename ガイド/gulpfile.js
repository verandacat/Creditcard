const gulp = require("gulp");
const sass = require("gulp-sass");

const imagemin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const changed = require("gulp-changed");

gulp.task("default", function() {
    return gulp
    .src("./images/**/*.{png,jpg}")
    .pipe(changed("distImg"))
    .pipe(
        imagemin([
            pngquant({
                quality: [.7, .85],
                speed: 1
            }),
            mozjpeg({
                quality: 85,
                progressive: true
            })
        ])
    )
    .pipe(gulp.dest("./distImg/"));
});


gulp.task("sass", function() {
    gulp.src("./*.scss")
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest("./css"));
})
