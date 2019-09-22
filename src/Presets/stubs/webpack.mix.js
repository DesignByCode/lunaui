let mix = require('laravel-mix');
let Path = require('path');
let ImageminPlugin     = require('imagemin-webpack-plugin').default;
let CopyWebpackPlugin  = require('copy-webpack-plugin');
let imageminMozjpeg    = require('imagemin-mozjpeg');


mix.webpackConfig({
    resolve: {
        alias: {
            // "TweenLite": Path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
        }
    },
    plugins: [
        //Compress images
        new CopyWebpackPlugin([{
            from: 'resources/img', // FROM
            to: 'img/', // TO
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            pngquant: {
                quality: '65-80'
            },
            plugins: [
                imageminMozjpeg({
                    quality: 65,
                    //Set the maximum memory to use in kbytes
                    // maxmemory: 1000 * 512
                })
            ]
        })
    ],
})
.js('resources/js/app.js', 'public/js')
.sass('resources/sass/style.sass', 'public/css');
