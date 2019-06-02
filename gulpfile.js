var gulp = require('gulp');
//var cache = require('gulp-cached'); //変更のあったもの(scss)
//var plumber = require('gulp-plumber'); //watch中にエラー防止
//var csscomb = require('gulp-csscomb'); //cssプロパティ順序
var sass = require('gulp-sass'); //cssコンパイル
//var autoprefixer = require('gulp-autoprefixer'); //ベンダープレフィックス
//var gcmq = require('gulp-group-css-media-queries'); //CSSメディアクエリー整理
//var notify = require('gulp-notify'); //エラーを通知
//var imageOptim = require('gulp-imageoptim');
//var imagemin = require('gulp-imagemin');
//var changed = require('gulp-changed'); //変更のあったもの(画像)
//var progeny = require('gulp-progeny');
var browserSync = require('browser-sync');
var sassGlob = require('gulp-sass-glob');
//var jshint = require('gulp-jshint'); //jshintで構文をチェック
//var postcss = require('gulp-postcss'); //CSSソート
//var cssdeclsort = require('css-declaration-sorter'); //CSSソート


/// cssコンパイル ////////////////////////////////////////////
//gulp.task('sass', function (done) {
//    return gulp.src('./sass/**/*.scss')
//
//        //        .pipe(cache('sass'))
//        //        .pipe(progeny())
//        .pipe(plumber({
//            errorHandler: notify.onError('Error: <%= error.message %>')
//        }))
//        .pipe(csscomb())
//        .pipe(sass({
//            outputStyle: 'expanded'
//        }))
//        .pipe(gcmq())
//        .pipe(autoprefixer({
//            browsers: ['last 2 versions'],
//            cascade: false
//        }))
//
//        .pipe(postcss([cssdeclsort({
//            order: 'alphabetically'
//        })]))
//
//        .pipe(gulp.dest('./css'))
//        .pipe(notify({
//            title: 'Sassをコンパイルしました。',
//            message: new Date(),
//            sound: 'Tink',
//            icon: '/Users/rosee/Documents/gulp_icon/gulp_icon.png'
//            // icon: '/Users/karima-ryo/docker/taskrun/gulplogo.jpg'
//        }));
//
//    done();
//});



gulp.task('sass', function () {
    return gulp
        .src('./sass/**/*.scss')
        .pipe(sassGlob())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', gulp.task('sass'));
});

//javascript from src/aseets/js to ./js

//gulp.task('js', function (done) {
//    return gulp.src('./src/assets/js/**/*.js')
//        .pipe(plumber())
//        .pipe(jshint()) // 2
//        .pipe(jshint.reporter('default')) // 2
//        // .pipe( concat( 'bundle.js' ) ) // 3
//        .pipe(gulp.dest('./js'))
//        .pipe(notify({
//            title: 'Jsをコピーしました',
//            message: new Date(),
//            sound: 'Tink',
//            icon: '/Users/rosee/Documents/gulp_icon/gulp_icon.png'
//        }));
//    done();
//});


// ローカルサーバーの立ち上げ

gulp.task('browser-sync', function (done) {
    browserSync.init({
        server: {
            baseDir: './',
            index: 'index.html'
        },
        //        socket: {
        //            domain: 'localhost:3000'
        //        },
        /* https サーバの場合
        https: {
        key: "./server.key",
        cert: "./server.crt"
        }, ここまで */
        files: ['./index.html'],
        //        files: ['./style.css'],
        files: ['./'],
        // files: ['./css/style.css'],
        //        open: false

    });
    done();

});

/// 画像圧縮 ////////////////////////////////////////////
//差分監視画像フォルダ
//var pathsIMG = {
//    srcDir: './src/assets/images/',
//    dstDir: './images'
//}
//
//
//gulp.task('images', function (done) {
//    var srcGlob = pathsIMG.srcDir + '*.+(jpg|jpeg|png|gif|svg)';
//    var dstGlob = pathsIMG.dstDir;
//    var imageminOptions = {
//        optimizationLevel: 5
//    };
//
//    return gulp.src(srcGlob)
//        .pipe(changed(dstGlob))
//        .pipe(imagemin(imageminOptions))
//        .pipe(gulp.dest(dstGlob))
//        .pipe(notify({
//            title: '画像を圧縮しました。',
//            message: new Date(),
//            sound: 'Tink',
//            icon: '/Users/rosee/Documents/gulp_icon/gulp_icon.png'
//        }));
//    done();
//});



/// 監視フォルダ ////////////////////////////////////////////
//gulp.task('watch', function () {
//    gulp.watch('./src/assets/sass/**/*.scss', gulp.task('sass'));
//    gulp.watch('./src/assets/js/**/*.js', gulp.series('js'));
//    gulp.watch('./src/assets/images/*.+(jpg|jpeg|png|gif|svg)', gulp.task('images'));
//});
///// Gulpコマンドで動かすもの ////////////////////////////////////////////
////gulp.task('default', gulp.task('watch'));
//
gulp.task('default', gulp.series(
    'sass',
    gulp.parallel('browser-sync', 'watch')
));
