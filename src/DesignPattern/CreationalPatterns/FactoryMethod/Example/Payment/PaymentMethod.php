<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Payment;

interface PaymentMethod
{
    public function processPayment(): string;
}
