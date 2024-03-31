<?php
interface PaymentAdapter {
    public function paye();
}

class Stripe
{
    public function buy() {
        return 'stripe buy';
    }
}
class StripeAdapter implements PaymentAdapter {
    private $stripe;

    public function __construct(Stripe $stripe) {
        $this->stripe = $stripe;
    }

    public function paye() {
        return $this->stripe->buy();
    }
}

class Paypal {
    public function buy() {
        return 'buy paypal';
    }
}
class PaypalAdapter implements PaymentAdapter {
    private $paypal;

    public function __construct(Paypal $paypal) {
        $this->paypal = $paypal;
    }

    public function paye() {
        return $this->paypal->buy();
    }
}

class Payer {
    public function __construct(private PaymentAdapter $payment) {}

    public function paye() {
        return $this->payment->paye();
    }
}

$stripe = new Stripe();
$paypal = new Paypal();
$stripeAdapter = new StripeAdapter($stripe);
$paypalAdapter = new PaypalAdapter($paypal);

$credit1 = new Payer($stripeAdapter);
var_dump($credit1->paye());

$credit2 = new Payer($paypalAdapter);
var_dump($credit2->paye());
