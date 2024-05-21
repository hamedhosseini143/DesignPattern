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
     * متد پیمنت را ایجاد کرده و تحویل میدهد
     * @return PaymentProviderInterface
     */
    abstract protected function createPaymentProvider(): PaymentProviderInterface;
}