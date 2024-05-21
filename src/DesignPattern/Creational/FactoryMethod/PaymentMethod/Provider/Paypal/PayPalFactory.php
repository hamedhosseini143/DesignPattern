<?php

namespace src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal;

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPalFactory extends PaymentMethodFactory
{

    /**
     * @return PaymentProviderInterface
     */
    public function createPaymentProvider(): PaymentProviderInterface
    {
        return new PayPal();
    }
}