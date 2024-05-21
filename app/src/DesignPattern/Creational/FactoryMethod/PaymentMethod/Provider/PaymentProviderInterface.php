<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider;

interface PaymentProviderInterface
{
    /**
     * پرداخت را انجام میدهد
     * @return bool
     */
    public function processPayment(): bool;
}