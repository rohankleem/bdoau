const path = require('path');

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
    devtool: 'eval-source-map',
    entry: {
        main: [
            './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
            './src/js/main.js',
            './src/js/megamenu.js',
            './src/scss/main.scss'
            //'./src/scss/megamenu.scss'
        ]
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {presets: ["@babel/preset-env"]},
                }
            },
            // sass compilation
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            },
        ]
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    plugins: [
        // css extraction into dedicated file
        new MiniCssExtractPlugin({
            filename: './main.bundle.css'
        }),
    ],
    optimization: {
        // minification - only performed when mode = production
        minimizer: [
            // js minification - special syntax enabling webpack 5 default terser-webpack-plugin
            `...`,
            // css minification
            new CssMinimizerPlugin(),
        ]
    },
    stats: {
        errorDetails: true,
      },
}