<?php 
// Bad: Variable names are not descriptive
$a = 5;
$b = 10;
$c = $a + $b;
echo $c;

// Good: Variable names are meaningful and descriptive
$firstNumber = 5;
$secondNumber = 10;
$sum = $firstNumber + $secondNumber;
echo $sum;

// Bad: Function does too many things
function processOrderBad($order)
{
    // Validate order
    if (empty($order['id'])) {
        return 'Invalid order';
    }

    // Calculate total
    $total = 0;
    foreach ($order['items'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Save order to database
    saveOrderToDatabaseBad($order);

    return $total;
}

// Good: Each function has a single responsibility
function validateOrder($order)
{
    if (empty($order['id'])) {
        return false;
    }
    return true;
}

function calculateOrderTotal($order)
{
    $total = 0;
    foreach ($order['items'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

function processOrder($order)
{
    if (!validateOrder($order)) {
        return 'Invalid order';
    }

    $total = calculateOrderTotal($order);
    saveOrderToDatabase($order);

    return $total;
}

// Bad: Inconsistent indentation and spacing
function calculateTotalBad($a,$b){
    return$a+$b;
    }
    
    // Good: Consistent indentation and spacing
    function calculateTotal($a, $b) {
        return $a + $b;
    }

// Bad: Using magic numbers
function calculateCircleAreaBad($radius)
{
    return 3.14 * $radius * $radius;
}

// Good: Using named constants
define('PI', 3.14);

function calculateCircleAreaGood($radius)
{
    return PI * $radius * $radius;
}

// Bad: Nested conditions
function isEligibleForDiscountBad($customer)
{
    if ($customer->isMember()) {
        if ($customer->hasLoyaltyCard()) {
            return true;
        }
    }
    return false;
}

// Good: Use guard clauses to simplify
function isEligibleForDiscountGood($customer)
{
    if (!$customer->isMember()) {
        return false;
    }

    if (!$customer->hasLoyaltyCard()) {
        return false;
    }

    return true;
}

// Bad: Dependencies are created inside the class
class OrderProcessorBad
{
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger();
    }

    public function process($order)
    {
        // Process the order
        $this->logger->log('Order processed');
    }
}

// Good: Dependencies are injected
class OrderProcessor
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function process($order)
    {
        // Process the order
        $this->logger->log('Order processed');
    }
}

// Bad: No comments or documentation
function calculateTotalPriceBad($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Good: Clear comments and documentation
/**
 * Calculate the total price of items in the cart.
 *
 * @param array $items An array of items, each with a price and quantity.
 * @return float The total price of all items.
 */
function calculateTotalPriceGood($items)
{
    $total = 0;

    // Iterate through each item to calculate the total price
    foreach ($items as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    return $total;
}

// Bad: Deeply nested code
function getUserRoleBad($user)
{
    if ($user->isActive()) {
        if ($user->isAdmin()) {
            return 'admin';
        } else {
            return 'user';
        }
    } else {
        return 'guest';
    }
}

// Good: Early return to avoid deep nesting
function getUserRole($user)
{
    if (!$user->isActive()) {
        return 'guest';
    }

    if ($user->isAdmin()) {
        return 'admin';
    }

    return 'user';
}

function saveOrderToDatabaseBad($order){}
function saveOrderToDatabase($order){}