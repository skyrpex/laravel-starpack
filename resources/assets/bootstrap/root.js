import Vue from 'vue';
import router from './router';

// Create the root component, which holds the vue-router
// and renders a router-view.
export default new Vue({
  router,
  render(h) {
    return h('router-view');
  },
});
