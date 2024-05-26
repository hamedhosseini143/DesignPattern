<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Payment;

interface PaymentMethodFactory
{
    public function createPaymentMethod    (): PaymentMethod;
}
