<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Payment;

interface PaymentMethod
{
    public function processPayment(): string;
}
