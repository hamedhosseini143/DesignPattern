<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

interface PaymentMethodFactoryInterface
{
    /**
     * Makes the payment
     * @return bool
     */
    public function processPayment(): bool;

}