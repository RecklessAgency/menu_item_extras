module.exports = configs => ({
  output: {
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /(node_modules)/,
        loader: 'babel-loader',
        query: {
          presets: [
            ['env', {
              targets: {
                browsers: configs.browsersSupport,
              },
            }],
          ],
        },
      },
    ],
  },
});
