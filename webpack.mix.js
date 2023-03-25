let mix = require('laravel-mix');
const webpack = require("webpack");

mix.browserSync('smart.local');

mix.js('resources/js/app.js', 'js').sass('resources/sass/app.scss', 'css');

mix.copyDirectory('resources/img', 'public/img');

mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),
    ],
})
