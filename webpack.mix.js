let mix = require("laravel-mix");
require("laravel-mix-purgecss");

mix
    //ICONS
    .copyDirectory("node_modules/remixicon/fonts", "dist/font/remixicon")

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

    //ERROR
    .sass("assets/sass/style-error.scss", "dist/css")
    .js(["assets/js/theme/functions/menu.js"], "dist/js/script-error.js")

    .options({
        processCssUrls: false,
        sourcemaps: false,
    })


    .options({
        processCssUrls: false,
        sourcemaps: false,
    })

    .purgeCss({
        extend: {
            enabled: true,
            content: ["**/*.php", "**/*.js", "**/*.json"],
            whitelistPatterns: [/hljs/],
        },
    })

    .browserSync({
        proxy: "localhost:8000",
        files: ["dist/js/*.js", "dist/css/*.css", "dist/images/*", "**/*.php"],
    });
