let mix = require("laravel-mix");
let $ = require("jquery");

mix.copyDirectory("node_modules/remixicon/fonts", "dist/font/remixicon")

    //HOME
    .sass("assets/sass/style.scss", "dist/css")
    .js(
        [
            "assets/js/vendors/jquery.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
        ],
        "dist/js/script-home.js"
    )

    .autoload({
        jquery: ["$", "window.jQuery"],
    })

    .options({
        processCssUrls: false,
        sourcemaps: false,
    })
    .browserSync({
        proxy: "localhost:8000",
        files: ["dist/js/*.js", "dist/css/*.css", "dist/images/*", "**/*.php"],
    });
