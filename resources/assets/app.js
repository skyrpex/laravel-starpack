/* eslint-disable global-require */

// Setup Webpack.
if (process.env.POI_MODE === 'watch' || process.env.POI_MODE === 'production') {
  require('./bootstrap/webpack-public-path');
} else if (process.env.POI_MODE === 'development') {
  require('./bootstrap/webpack-hot-reload');
}

// Mount the root component.
require('./bootstrap/mount');
