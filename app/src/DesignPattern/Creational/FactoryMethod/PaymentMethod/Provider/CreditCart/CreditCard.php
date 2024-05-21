<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class CreditCard implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     */
    public function processPayment(): bool
    {
        echo 'از طریق کردیت کارت پول بده';
        return true;
    }
}