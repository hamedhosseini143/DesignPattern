<?php

namespace src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

abstract class PaymentMethodFactory implements PaymentMethodFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function processPayment(Order $order): bool
    {
        $payment = $this->createPaymentProvider();
        return $payment->processPayment($order);
    }

    /**
     * Creates the payment method
     * @return PaymentProviderInterface
     */
    abstract protected function createPaymentProvider(): PaymentProviderInterface;
}