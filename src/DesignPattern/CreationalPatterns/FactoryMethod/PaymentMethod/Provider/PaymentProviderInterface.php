<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider;

use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;

interface PaymentProviderInterface
{
    /**
     *  makes the payment
     * @param Order $order
     * @return bool
     */
    public function processPayment(Order $order): bool;
}