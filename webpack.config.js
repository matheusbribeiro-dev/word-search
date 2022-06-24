const path = require('path');

module.exports = {
  mode: 'development',
  entry: './resources/js/script.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'public/js/'),
  },
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['@babel/preset-env'],
            plugins: ['@babel/plugin-transform-runtime']
          }
        }
      }
    ]
  }
};