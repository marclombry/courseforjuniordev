/**
 * // Gestion des Erreurs

import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// Composant de gestion des erreurs
class ErrorBoundary extends Component {
    constructor(props) {
        super(props);
        this.state = { hasError: false };
    }

    static getDerivedStateFromError() {
        return { hasError: true };
    }

    componentDidCatch(error, errorInfo) {
        console.error('Erreur capturée:', error, errorInfo);
    }

    render() {
        if (this.state.hasError) {
            return <h1>Une erreur est survenue.</h1>;
        }

        return this.props.children;
    }
}

// Composant avec une erreur
function BuggyComponent() {
    throw new Error('Ceci est une erreur!');
    return <div>Ce texte ne sera jamais affiché.</div>;
}

// Composant principal
function App() {
    return (
        <ErrorBoundary>
            <BuggyComponent />
        </ErrorBoundary>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */