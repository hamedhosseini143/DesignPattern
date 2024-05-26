<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\Paypal;

use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPal implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(Order $order): bool
    {
        echo  "Processing payment with PayPal for order: " . $order->getTotalPrice() . "\n";
        return true;
    }
}