let mix = require("laravel-mix");

mix.autoload({
   jquery: ["$", "window.jQuery"],
})

   .sass("assets/sass/style.scss", "dist/css")

   .options({
      processCssUrls: false,
      sourcemaps: false,
   })
   .browserSync({
      proxy: "localhost:8000",
      files: ["dist/js/*.js", "dist/css/*.css", "dist/images/*", "**/*.php"],
   });
