const mix = require("laravel-mix");
const path = require("path");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js/app.js")
  .js("resources/js/auth.js", "public/js/auth.js")
    .copy([
        "resources/sass/config/fonts/inter",
        "resources/sass/config/fonts/menlo",
    ], "public/fonts/")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .vue()
    .webpackConfig({
        devtool: "inline-source-map",
        resolve: {
          extensions: [".js", ".vue", ".json"],
          alias: {
            '~': path.join(__dirname, './resources/'),
            'dcode': path.join(__dirname, './node_modules/@dcodegroup-au/')
          },
        },
      });
    
if (mix.inProduction()) {
    mix.version();
}
