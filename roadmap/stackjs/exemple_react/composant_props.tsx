/**
 * // Composants et Props

import React from 'react';
import ReactDOM from 'react-dom';

// Composant fonctionnel avec props
function Greeting(props) {
    return <h1>Bonjour, {props.name}!</h1>;
}

// Composant principal
function App() {
    return (
        <div>
            <Greeting name="Alice" />
            <Greeting name="Bob" />
        </div>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */