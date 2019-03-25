const
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin');

// sass tasks
gulp.task('sass', () =>
    gulp.src('src/scss/main.scss')
        .pipe(sass({
            sourceComments: false,
            outputStyle: 'compressed'
        }))
        .pipe(postcss([autoprefixer()]))
        .pipe(gulp.dest('css/'))
);

// javascript tasks
gulp.task('js', () =>
    gulp.src('src/js/main.js')
        .pipe(babel({ presets: ['env'] }))
        .pipe(uglify())
        .pipe(gulp.dest('js/'))
);

// images optimization works with jpeg, jpg, svg, gif, png
gulp.task('images', () =>
    gulp.src('src/img/*')
        .pipe(imagemin({ verbose: true }))
        .pipe(gulp.dest('img/'))
);

// Static Server + watching html/scss/js files
gulp.task('default', ['sass', 'js', 'images'], () => {
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/js/main.js', ['js']);
    gulp.watch('src/img/*', ['images']);
});
