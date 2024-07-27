/**
 * // Gestion des Effets de Bord

import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';

// Composant utilisant useEffect
function Clock() {
    const [time, setTime] = useState(new Date());

    useEffect(() => {
        const timer = setInterval(() => setTime(new Date()), 1000);
        return () => clearInterval(timer);
    }, []);

    return (
        <div>
            <h2>Heure actuelle : {time.toLocaleTimeString()}</h2>
        </div>
    );
}

// Composant principal
function App() {
    return (
        <div>
            <Clock />
        </div>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */