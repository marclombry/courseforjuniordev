/**
 * // Configuration de l'application

import '../styles/globals.css';

function MyApp({ Component, pageProps }) {
  return <Component {...pageProps} />;
}

export default MyApp;

 */

/**
 * # Installation et Configuration de Next.js

## Prérequis
- Node.js installé (version recommandée : LTS)

## Installation du Projet

1. Installer Next.js et React :
   ```bash
   npx create-next-app@latest mon-projet
Naviguer dans le répertoire du projet :
bash
cd mon-projet
Démarrer le serveur de développement :
bash
npm run dev

Ouvrir votre navigateur à l'adresse http://localhost:3000 pour voir l'application en action.

### Fichier Next.js pour `Composants et Props`

**Nom du fichier**: `components/User.js`

```jsx
// Composant User

const User = ({ name }) => {
  return <p>Utilisateur : {name}</p>;
};

export default User;
 */