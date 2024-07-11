<?php 
/**
 * The Liskov Substitution Principle (LSP) states that objects of a derived class must be able to be replaced by objects of the base class 
 * without altering the expected behavior of the program. 
 * In other words, a derived class must be able to be used where a base class is expected, without causing bugs.
 * in short, do not pass as an argument for your method one class but and interface
 *
 */

/* Bad practice because shoppingCart is forced to use the Product class to work*/
class product{}

class shoppingCart {
    public function addProduct(Product $product) {
        // code ....
    }
}

/** Good Practice */
interface CartManagement {
    public function addProduct(Product $product);
}
class DeskProduct implements CartManagement
{
    public function addProduct($product) {
        // code ...
    }
}

class FoodProduct implements CartManagement
{
    public function addProduct($product) {
        // code ...
    }
}

class shoppingCartManager {
    public function addProductToCart(CartManagement $product) {
        // code ....
    }
}

$shoppingCartManager = new shoppingCartManager;
$foodProduct = new FoodProduct;
$deskProuct = new DeskProduct;
$shoppingCartManager->addProductToCart($foodProduct);
$shoppingCartManager->addProductToCart($deskProuct);