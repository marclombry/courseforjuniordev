/**
 * <!-- Gestion des Erreurs -->

<template>
  <div>
    <ErrorBoundary>
      <BuggyComponent />
    </ErrorBoundary>
  </div>
</template>

<script>
import { defineComponent, h } from 'vue';

// Composant ErrorBoundary
const ErrorBoundary = defineComponent({
    data() {
        return {
            hasError: false
        };
    },
    errorCaptured(err, vm, info) {
        console.error('Erreur capturée:', err, info);
        this.hasError = true;
        return false;
    },
    render() {
        if (this.hasError) {
            return h('h1', 'Une erreur est survenue.');
        }
        return this.$slots.default();
    }
});

// Composant BuggyComponent avec une erreur
const BuggyComponent = defineComponent({
    setup() {
        throw new Error('Ceci est une erreur!');
    },
    render() {
        return h('div', 'Ce texte ne sera jamais affiché.');
    }
});

export default defineComponent({
    components: {
        ErrorBoundary,
        BuggyComponent
    }
});
</script>

 */