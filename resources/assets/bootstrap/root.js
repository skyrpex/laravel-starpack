import Vue from 'vue';
import { data as env } from './env';

export default new Vue({
  computed: {
    env() {
      return env;
    },
  },
  render(h) {
    return h('div', JSON.stringify(this.env));
  },
});
