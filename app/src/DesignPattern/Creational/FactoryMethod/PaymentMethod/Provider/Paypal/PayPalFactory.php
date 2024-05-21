<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPalFactory extends PaymentMethodFactory
{

    public function createPaymentProvider(): PaymentProviderInterface
    {
        return new PayPal();
    }
}