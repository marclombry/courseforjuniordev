<?php

/**
 * The Dependency Inversion Principle (DIP) states that high-level modules should not depend on low-level modules. 
 * Both depend on abstractions. Furthermore, abstractions should not depend on details. Details depend on abstractions.
 */

/* Bad practice  because OrderProcessor depends on PaymentService class */

class PaymentService
{
    public function processPayment($amount)
    {
        // code ...
    }
}

class OrderProcessor
{
    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function processOrder($amount)
    {
        $this->paymentService->processPayment($amount);
    }
}


/** Good practice because OrdersProcessor does not depends on a class , it's depends on the implementation*/
interface PaymentProcessor
{
    public function processPayment($amount);
}

class PaymentServices implements PaymentProcessor
{
    public function processPayment($amount)
    {
        // code
    }
}

class OrdersProcessor
{
    private $paymentProcessor;

    public function __construct(PaymentProcessor $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function processOrder($amount)
    {
        $this->paymentProcessor->processPayment($amount);
    }
}

$paymentService = new PaymentService();
$orderProcessor = new OrderProcessor($paymentService);
$orderProcessor->processOrder(100);