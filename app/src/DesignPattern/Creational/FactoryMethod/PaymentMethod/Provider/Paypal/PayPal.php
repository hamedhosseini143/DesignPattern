<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPal implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     */
    public function processPayment(): bool
    {
        echo 'از طریق پی پل پول بده';
        return true;
    }
}