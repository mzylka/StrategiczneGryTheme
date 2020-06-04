const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const devMode = process.env.NODE_ENV;

module.exports = {
    entry: "./src/index.js",
    output: {
        path: path.resolve(__dirname, "./"),
        filename: "bundle.js"
    },
    plugins: [new MiniCssExtractPlugin({filename: "style.css"})],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            hmr: process.env.NODE_ENV === 'development',
                            sourceMap: true
                        }
                    },                   
                    "css-loader",
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            config: {
                                path: 'postcss.config.js'
                            }
                        }
                    },
                    "sass-loader"
                ]

            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            }
        ]
    }
}