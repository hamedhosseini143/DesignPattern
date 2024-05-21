<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class CreditCard implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(): bool
    {
        echo 'Pay with credit card';
        return true;
    }
}