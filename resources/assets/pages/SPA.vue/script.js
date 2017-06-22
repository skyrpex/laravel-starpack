import { data } from '../../bootstrap/env';

export default {
  name: 'SPA',
  computed: {
    env() {
        return data;
    },
  },
};
