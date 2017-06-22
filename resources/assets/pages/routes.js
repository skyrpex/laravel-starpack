export default [
  {
    path: '/spa',
    name: 'test',
    component: require('./SPA.vue'),
  },
  {
    path: '*',
    name: 'errors.not_found',
    component: require('./errors/NotFound.vue'),
  },
];
