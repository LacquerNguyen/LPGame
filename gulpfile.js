const { gulp, src, dest, watch, series, parallel } = require('gulp'),
	env = require('node-env-file'),
	plumber = require("gulp-plumber"),
	sass = require('gulp-sass'),
	cleancss = require('gulp-clean-css'),
	autoprefixer = require('gulp-autoprefixer'),
	notify = require('gulp-notify');

env('.env');

const paths = {
	"url": "localhost:" + process.env.PORT_NUM,
	"css": "./src/wp-content/themes/" + process.env.THEME_NAME + "/assets/css/",
	"scss": "./src/wp-content/themes/" + process.env.THEME_NAME + "/assets/scss/**/*.scss"
}

//Sass

function sassTask() {
	return src(paths.scss)

		.pipe(plumber())
		.pipe(sass({ outputStyle: 'expanded' }))
		.pipe(cleancss({ debug: true }, function (details) {
			console.log(details.name + ': ' + details.stats.originalSize + ' > ' + + details.stats.minifiedSize);
		}))
		.pipe(autoprefixer({
			browsers: ["last 2 versions", "ie >= 9", "Android >= 4", "ios_saf >= 8"],
			cascade: false
		}))
		.pipe(dest(paths.css))
		.pipe(notify("Sass Compile Success!"));
}


function watchTask() {
	watch([paths.scss, 'sass'], parallel(sassTask));  
}

exports.default = series(
    parallel(sassTask), 
    watchTask
);