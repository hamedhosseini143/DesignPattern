<?php

namespace src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreditCart;

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

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