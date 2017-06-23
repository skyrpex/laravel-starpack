<template>
  <div>
    <h1>Welcome to the SPA</h1>

    <p>Starpack env</p>
    <pre><code v-text="starpackEnv"></code></pre>

    <p>Node env</p>
    <pre><code v-text="nodeEnv"></code></pre>
  </div>
</template>

<script>
import { data as starpackEnv } from '../bootstrap/env';

export default {
  name: 'Welcome',
  computed: {
    starpackEnv() {
      return starpackEnv;
    },
    nodeEnv() {
      return process.env;
    },
  },
};
</script>
