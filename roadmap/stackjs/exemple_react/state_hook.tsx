/**
 * // State et Hooks

import React, { useState } from 'react';
import ReactDOM from 'react-dom';

// Composant utilisant useState
function Counter() {
    const [count, setCount] = useState(0);

    return (
        <div>
            <p>Vous avez cliqué {count} fois</p>
            <button onClick={() => setCount(count + 1)}>Cliquez-moi</button>
        </div>
    );
}

// Composant principal
function App() {
    return (
        <div>
            <Counter />
        </div>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */