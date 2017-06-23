/* eslint-disable camelcase, no-undef */
import env from './env';

// This assignment will tell Webpack's where the assets are
// living. It's necessary for chunks, fonts, images...
// https://webpack.js.org/guides/public-path/#set-value-on-the-fly
__webpack_public_path__ = `${env('WEBPACK_PUBLIC_PATH')}/`;
