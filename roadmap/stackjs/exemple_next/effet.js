/**
 * // Utilisation de l'API route

import { useEffect, useState } from 'react';

const Home = () => {
  const [message, setMessage] = useState('');

  useEffect(() => {
    fetch('/api/hello')
      .then((res) => res.json())
      .then((data) => setMessage(data.message));
  }, []);

  return (
    <div>
      <h1>Bienvenue dans Next.js !</h1>
      <p>{message}</p>
    </div>
  );
};

export default Home;

 */