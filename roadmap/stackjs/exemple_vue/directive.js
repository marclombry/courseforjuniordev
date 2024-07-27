/**
 * <!-- Directives et Vuex -->

<template>
  <div>
    <input v-model="message" placeholder="Tapez quelque chose">
    <p>Message: {{ message }}</p>
    <button @click="increment">Ajouter</button>
    <p>Nombre: {{ count }}</p>
  </div>
</template>

<script>
import { createStore } from 'vuex';

// Création du store Vuex
const store = createStore({
    state() {
        return {
            count: 0
        }
    },
    mutations: {
        increment(state) {
            state.count++;
        }
    }
});

// Composant principal
export default {
    data() {
        return {
            message: ''
        }
    },
    computed: {
        count() {
            return store.state.count;
        }
    },
    methods: {
        increment() {
            store.commit('increment');
        }
    },
    store
}
</script>

 */