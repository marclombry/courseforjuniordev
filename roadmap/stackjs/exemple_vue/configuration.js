/**
 * // Installation et Configuration

// Instructions pour installer et configurer un projet Vue.js
// Utilisez les commandes suivantes dans le terminal:

// Créez un nouveau projet Vue.js
// npm install -g @vue/cli
// vue create mon-projet

// Accédez au répertoire du projet
// cd mon-projet

// Démarrez le serveur de développement
// npm run serve

// Exemple de configuration du projet
import { createApp } from 'vue';

const app = createApp({
    data() {
        return {
            message: 'Configuration réussie!'
        };
    }
});

app.mount('#app');

 */