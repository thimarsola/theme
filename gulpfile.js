const gulp = require('gulp');
const webp = require('gulp-webp');
const image = require('gulp-image');
const watch = require('gulp-watch');

gulp.task('webp', gulp.series(function () {
    return gulp.src('./assets/images/*')
        .pipe(webp())
        .pipe(gulp.dest('./dist/images'));
}));

gulp.task('image', gulp.series(function () {
    return gulp.src('./assets/images/*')
        .pipe(image())
        .pipe(gulp.dest('./dist/images'));
}));

gulp.task('svg', gulp.series(function () {
    return gulp.src('./assets/svg/*.svg').pipe(gulp.dest('./dist/images'))
}));

gulp.task('watch', gulp.series(function () {
    gulp.watch(['./assets/dist/**'], gulp.parallel(['webp', 'image', 'svg']));
}));

gulp.task('default', gulp.series(['webp', 'image', 'svg', 'watch']));