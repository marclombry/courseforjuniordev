/**
 * // Page de formulaire

import { useState } from 'react';

const Form = () => {
  const [name, setName] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Nom soumis:', name);
  };

  return (
    <div>
      <h1>Formulaire</h1>
      <form onSubmit={handleSubmit}>
        <label htmlFor="name">Nom:</label>
        <input
          id="name"
          type="text"
          value={name}
          onChange={(e) => setName(e.target.value)}
        />
        <button type="submit">Soumettre</button>
      </form>
    </div>
  );
};

export default Form;

 */