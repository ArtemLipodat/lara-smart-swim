let mix = require('laravel-mix');

mix.browserSync('smart.local');



mix.js('resources/js/app.js', 'js').sass('resources/sass/app.scss', 'css');


mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.(svg)$/,
                use: "svg-sprite-loader"
            },
        ]
    },
});
