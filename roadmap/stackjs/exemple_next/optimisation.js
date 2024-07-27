/**
 * // Optimisation des performances avec Next.js

import dynamic from 'next/dynamic';
import { useState } from 'react';

const ExpensiveComponent = dynamic(() => import('../components/ExpensiveComponent'), { ssr: false });

const Home = () => {
  const [show, setShow] = useState(true);

  return (
    <div>
      <h1>Bienvenue dans Next.js !</h1>
      <button onClick={() => setShow(!show)}>
        {show ? 'Masquer' : 'Afficher'} le composant coûteux
      </button>
      {show && <ExpensiveComponent />}
    </div>
  );
};

export default Home;

 */