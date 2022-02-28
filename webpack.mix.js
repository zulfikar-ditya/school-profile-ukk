const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("postcss-import"), require("tailwindcss")]
);
mix.js("resources/js/tailwind-element.js", "public/js");
mix.js("resources/js/jquery.js", "public/js");
mix.js("resources/js/sweetalert.js", "public/js");
mix.js("resources/js/tinymce.js", "public/js");
mix.js("resources/js/feather-icons.js", "public/js");
mix.js("resources/js/darkmode.js", "public/js");
mix.js("resources/js/flowbite.js", "public/js");

if (mix.inProduction()) {
    mix.version();
}

mix.copyDirectory("resources/font", "public/font");
mix.disableSuccessNotifications();
