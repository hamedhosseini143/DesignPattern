<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\CreditCart;

use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class CreditCardFactory extends PaymentMethodFactory
{
    /**
     * @return PaymentProviderInterface
     */
    public function createPaymentProvider(): PaymentProviderInterface
    {
        return new CreditCard();
    }
}