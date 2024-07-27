/**
 * // Context API

import React, { createContext, useContext, useState } from 'react';
import ReactDOM from 'react-dom';

// Création du contexte
const ThemeContext = createContext();

// Composant fournisseur du contexte
function ThemeProvider({ children }) {
    const [theme, setTheme] = useState('light');

    const toggleTheme = () => {
        setTheme(theme === 'light' ? 'dark' : 'light');
    };

    return (
        <ThemeContext.Provider value={{ theme, toggleTheme }}>
            {children}
        </ThemeContext.Provider>
    );
}

// Composant consommateur du contexte
function ThemedComponent() {
    const { theme, toggleTheme } = useContext(ThemeContext);
    return (
        <div style={{ background: theme === 'light' ? '#fff' : '#333', color: theme === 'light' ? '#000' : '#fff' }}>
            <p>Thème actuel : {theme}</p>
            <button onClick={toggleTheme}>Changer le thème</button>
        </div>
    );
}

// Composant principal
function App() {
    return (
        <ThemeProvider>
            <ThemedComponent />
        </ThemeProvider>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));

 */