<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

interface PaymentMethodFactoryInterface
{
    /**
     * پرداخت را انجام میدهد
     * @return bool
     */
    public function processPayment(): bool;

}