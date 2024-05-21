<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

interface PaymentMethodFactoryInterface
{
    /**
     * Makes the payment
     * @param Order $order
     * @return bool
     */
    public function processPayment(Order $order): bool;

}