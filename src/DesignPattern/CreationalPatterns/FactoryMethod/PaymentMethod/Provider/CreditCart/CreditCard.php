<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\CreditCart;

use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class CreditCard implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(Order $order ): bool
    {
        echo "Processing payment with Credit Card for order: " . $order->getTotalPrice() . "\n";
        return true;
    }
}