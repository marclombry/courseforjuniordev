<?php
// Start a PHP session to store cart data
session_start();

// Function to add an item to the cart
function addToCart($id, $name, $price, $quantity) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$id])) {
        // If the item is already in the cart, update the quantity
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
        // Otherwise, add the item to the cart
        $_SESSION['cart'][$id] = array(
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        );
    }
}

// Function to remove an item from the cart
function removeFromCart($id) {
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

// Example usage to add items to the cart
addToCart(1, 'Product 1', 10.00, 2);
addToCart(2, 'Product 2', 15.00, 1);
addToCart(3, 'Product 3', 5.00, 3);

// Example usage to remove an item from the cart
removeFromCart(2);

// Display the cart contents
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo '<h2>Cart Contents:</h2>';
    foreach ($_SESSION['cart'] as $id => $item) {
        echo 'ID: ' . $id . '<br>';
        echo 'Name: ' . $item['name'] . '<br>';
        echo 'Price: $' . $item['price'] . '<br>';
        echo 'Quantity: ' . $item['quantity'] . '<br>';
        echo '<hr>';
    }
} else {
    echo '<p>The cart is empty.</p>';
}
?>
