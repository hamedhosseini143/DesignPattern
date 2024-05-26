<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod;

interface PaymentMethodFactoryInterface
{
    /**
     * Makes the payment
     * @param Order $order
     * @return bool
     */
    public function processPayment(Order $order): bool;

}