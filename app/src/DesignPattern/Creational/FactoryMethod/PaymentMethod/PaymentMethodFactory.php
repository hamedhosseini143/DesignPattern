<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

abstract class PaymentMethodFactory implements PaymentMethodFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function processPayment(): bool
    {
        $payment = $this->createPaymentProvider();
        return $payment->processPayment();
    }

    /**
     * Creates the payment method
     * @return PaymentProviderInterface
     */
    abstract protected function createPaymentProvider(): PaymentProviderInterface;
}