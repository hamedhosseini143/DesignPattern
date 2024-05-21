<?php

namespace src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider;

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;

interface PaymentProviderInterface
{
    /**
     *  makes the payment
     * @param Order $order
     * @return bool
     */
    public function processPayment(Order $order): bool;
}