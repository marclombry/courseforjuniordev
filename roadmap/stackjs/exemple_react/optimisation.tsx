/**
 * // Optimisation des Performances

import React, { memo } from 'react';
import ReactDOM from 'react-dom';

// Composant fonctionnel optimisé avec memo
const ExpensiveComponent = memo(({ value }) => {
    console.log('Rendering ExpensiveComponent');
    return <div>{value}</div>;
});

// Composant principal
function App() {
    const [count, setCount] = React.useState(0);

    return (
        <div>
            <button onClick={() => setCount(count + 1)}>Incrémenter</button>
            <ExpensiveComponent value={count} />
        </div>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */