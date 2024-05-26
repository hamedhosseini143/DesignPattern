<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\Paypal;

use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

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