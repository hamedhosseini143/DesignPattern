<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Payment;

interface PaymentMethodFactory
{
    public function createPaymentMethod    (): PaymentMethod;
}
