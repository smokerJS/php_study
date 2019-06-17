var path = require('path');

module.exports = {
    context: path.resolve(__dirname, 'client/pages'),
    entry: {
        index: './index.js',
        join: './join.js',
        login: './login.js',
        board: './board.js',
    },
    devtool: 'sourcemaps',
    cache: true,
    output: {
        path: __dirname,
        filename: './client/build/react/[name].bundle.js'
    },
    mode: 'none',
    module: {
        rules: [ {
            test: /\.js?$/,
            exclude: /(node_modules)/,
            use: {
                loader: 'babel-loader',
                options: {
                    plugins: [ '@babel/plugin-proposal-class-properties' ],
                    presets: [ '@babel/preset-env', '@babel/preset-react' ]
                }
            }
        }, {
            test: /\.css$/,
            use: [ 'style-loader', 'css-loader' ]
        } ]
    }
};