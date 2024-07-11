<?php

/**
 * The Facade pattern is a structural design pattern that provides a simplified interface to a complex set of classes, libraries, or systems. 
 * It aims to make a library or feature set easier to use and understand, by hiding complex details behind a simpler interface.
 */

class OrderProcess
{
    public function processOrder($order)
    {
        echo "Order processed.\n";
    }
}

class InventoryManager
{
    public function updateInventory($order)
    {
        echo "Inventory updated.\n";
    }
}

class PaymentGateway
{
    public function processPayment($paymentDetails)
    {
        echo "Payment processed.\n";
    }
}

class OrderFacade
{
    private $orderProcessor;
    private $inventoryManager;
    private $paymentGateway;

    public function __construct()
    {
        $this->orderProcessor = new OrderProcess();
        $this->inventoryManager = new InventoryManager();
        $this->paymentGateway = new PaymentGateway();
    }

    public function placeOrder($order, $paymentDetails)
    {
        $this->paymentGateway->processPayment($paymentDetails);
        $this->orderProcessor->processOrder($order);
        $this->inventoryManager->updateInventory($order);
        echo "Order placed successfully.\n";
    }
}

$orderFacade = new OrderFacade();
$order = "Order details";
$paymentDetails = "Payment details";

$orderFacade->placeOrder($order, $paymentDetails);
