const path = require('path')

module.exports = {
  mode: 'development',
  entry: './js/calender.js',
  resolve: {
    extensions: [ '.js' ]
  },
  output: {
    filename: 'calender.js',
    path: path.join(__dirname, 'js1')
  },
  devtool: 'sourcemap'
}
