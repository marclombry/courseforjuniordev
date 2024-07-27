/**
 * <!-- Routage avec Vue Router -->

<template>
  <div>
    <router-link to="/">Accueil</router-link>
    <router-link to="/about">À propos</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
import { createRouter, createWebHistory } from 'vue-router';
import { createApp } from 'vue';

// Composants pour les routes
const Home = { template: '<h2>Page d\'accueil</h2>' };
const About = { template: '<h2>À propos de nous</h2>' };

// Création du routeur
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/about', component: About }
    ]
});

// Création de l'application Vue
const app = createApp({});
app.use(router);
app.mount('#app');
</script>

 */