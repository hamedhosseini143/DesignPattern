<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\PaymentMethodFactory;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

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