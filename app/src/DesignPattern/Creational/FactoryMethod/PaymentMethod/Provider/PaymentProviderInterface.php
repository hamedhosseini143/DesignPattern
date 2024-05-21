<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider;

interface PaymentProviderInterface
{
    /**
     *  makes the payment
     * @return bool
     */
    public function processPayment(): bool;
}