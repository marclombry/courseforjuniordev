/**
 * <!-- Mixins et Plugins -->

<template>
  <div>
    <p>{{ message }}</p>
    <p>{{ formattedDate }}</p>
  </div>
</template>

<script>
import { createApp } from 'vue';

// Mixins
const mixin = {
    data() {
        return {
            message: 'Bonjour de Vue.js!'
        }
    },
    computed: {
        formattedDate() {
            return new Date().toLocaleDateString();
        }
    }
};

// Plugin
const myPlugin = {
    install(app) {
        app.config.globalProperties.$myPlugin = () => 'Plugin installé!';
    }
};

const app = createApp({
    mixins: [mixin]
});

app.use(myPlugin);
app.mount('#app');
</script>

 */