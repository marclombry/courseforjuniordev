/**
 * // Routage avec React Router

import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

// Composants pour les routes
function Home() {
    return <h2>Page d'accueil</h2>;
}

function About() {
    return <h2>À propos de nous</h2>;
}

function NotFound() {
    return <h2>Page non trouvée</h2>;
}

// Composant principal avec routage
function App() {
    return (
        <Router>
            <nav>
                <ul>
                    <li><Link to="/">Accueil</Link></li>
                    <li><Link to="/about">À propos</Link></li>
                </ul>
            </nav>
            <Switch>
                <Route path="/" exact component={Home} />
                <Route path="/about" component={About} />
                <Route component={NotFound} />
            </Switch>
        </Router>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */