const autoprefixer = require('autoprefixer');
const WebpackNotifierPlugin = require('webpack-notifier');
const path = require('path');
// const { mix } = require('laravel-mix');

// mix.js('assets/js/app.js', './');
//    .sass('sass/style.scss', './');

module.exports = {
    entry: ['./assets/sass/app.scss', './assets/js/app.js'],
    output: {
        filename: 'bundle.js',
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        },
        extensions: ['*', '.js', '.vue', '.json']
    },
    module: {
        rules: [
        {
            test: /\.scss$/,
            use: [
                {
                    loader: 'file-loader',
                    options: {
                        name: 'bundle.css',
                    },
                },
                {loader: 'extract-loader'},
                {loader: 'css-loader'},
                {loader: 'postcss-loader',
                    options: {
                        plugins: () => [autoprefixer()],
                    },
                },
                {
                    loader: 'sass-loader',
                    options: {
                        includePaths: ['./node_modules'],
                    },
                }
            ],
        },
        {
            test: /\.js$/,
            loader: 'babel-loader',
            query: {
                presets: ['es2015','vue'],
                plugins: ['transform-object-assign']
            },
        },
        {
            test: /\.vue$/,
            loader: 'vue-loader',
        }
        ],
    },
    plugins: [
        new WebpackNotifierPlugin({
            contentImage: path.join(__dirname, 'webpack-logo.png'),
            title: 'Fen Says',
            alwaysNotify: true
        }),
    ]
};