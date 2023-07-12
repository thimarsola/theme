let mix = require("laravel-mix");
require("laravel-mix-purgecss");

mix
    //ICONS
    .copyDirectory("node_modules/remixicon/fonts", "dist/font/remixicon")

    //HOME
    .sass("assets/sass/style.scss", "dist/css")
    .js(
        [
            "assets/js/theme/functions/cookies.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
        ],
        "dist/js/script-home.js"
    )


    //PAGE
    .sass("assets/sass/style-pages.scss", "dist/css")
    .js(
        [
            "assets/js/theme/functions/cookies.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
        ],
        "dist/js/script-pages.js"
    )

    // PAGE - CONTACT
    .copy('node_modules/imask/dist/imask.js.map', 'dist/js').js(
    [
        'assets/js/theme/functions/cookies.js',
        'assets/js/theme/functions/menu.js',
        'assets/js/theme/functions/sticky.js',
        'node_modules/imask/dist/imask.js',
        'assets/js/theme/functions/mask.js',
        'node_modules/sweetalert2/dist/sweetalert2.js',
        'assets/js/theme/request/request.js',
    ],
    'dist/js/script-contact.js',
)

    //SINGLE
    .sass("assets/sass/style-single.scss", "dist/css")
    .js(
        [
            "assets/js/theme/functions/cookies.js",
            "assets/js/theme/functions/menu.js",
            "assets/js/theme/functions/sticky.js",
        ],
        "dist/js/script-single.js"
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
