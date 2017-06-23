/* eslint-disable import/no-extraneous-dependencies, import/no-unresolved, import/extensions */
import 'eventsource-polyfill';
import hotClient from 'webpack-hot-middleware/client?noInfo=true&reload=true&dynamicPublicPath=true&path=__webpack_hmr';

// Subscribe to reload events 💪.
hotClient.subscribe((event) => {
  if (event.action === 'reload') {
    location.reload();
  }
});
