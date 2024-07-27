/**
 * // Tests avec React Testing Library

import React from 'react';
import { render, screen, fireEvent } from '@testing-library/react';
import '@testing-library/jest-dom/extend-expect';

// Composant à tester
function Button({ onClick }) {
    return <button onClick={onClick}>Cliquez-moi</button>;
}

// Test du composant Button
test('le bouton déclenche une fonction au clic', () => {
    const handleClick = jest.fn();
    render(<Button onClick={handleClick} />);
    fireEvent.click(screen.getByText(/Cliquez-moi/i));
    expect(handleClick).toHaveBeenCalledTimes(1);
});

 */