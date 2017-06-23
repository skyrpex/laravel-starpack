export default [
  {
    path: '/welcome',
    component: require('./Welcome.vue'),
  },
  {
    path: '*',
    component: require('./errors/PageNotFound.vue'),
  },
];
