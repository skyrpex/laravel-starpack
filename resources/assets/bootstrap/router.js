import url from 'url';
import Vue from 'vue';
import { each } from 'lodash';
import Router from 'vue-router';
import routes from '../pages/routes';
import env from './env';

Vue.use(Router);

const router = new Router({
  base: url.parse(
    url.resolve(location.href, env('BASE_URL', '/')),
  ).pathname,
  mode: 'history',
  routes,
});

export default router;
