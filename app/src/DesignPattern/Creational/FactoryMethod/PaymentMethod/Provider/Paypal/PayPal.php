<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPal implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(): bool
    {
        echo 'Pay with PayPal';
        return true;
    }
}