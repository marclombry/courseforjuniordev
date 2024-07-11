<?php

/**
 * The Proxy pattern is a structural design pattern that allows you to control access to an object by providing a substitute 
 * or placeholder for that object. This surrogate allows additional operations such as checking permissions, caching results, etc.
 *  to be performed before passing the request to the actual object.
 */

interface IPaymentServices
{
    public function request(float $amount): void;
}

class PaymentServiceImpl implements IPaymentServices
{
    public function request(float $amount): void
    {
        echo "Traitment , mount : $amount\n";
    }
}

class PaymentProxy implements IPaymentServices
{
    private $realService;
    private $isAdmin;

    public function __construct(bool $isAdmin)
    {
        $this->realService = new PaymentServiceImpl();
        $this->isAdmin = $isAdmin;
    }

    public function request(float $amount): void
    {
        if ($this->isAdmin) {
            $this->realService->request($amount);
        } else {
            echo "Acces denied.\n";
        }
    }
}

$proxy = new PaymentProxy(true); 
$proxy->request(100.50); 

$proxy = new PaymentProxy(false); 
$proxy->request(50.25); 