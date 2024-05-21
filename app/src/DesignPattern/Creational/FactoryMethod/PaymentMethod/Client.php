<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart\CreditCardFactory;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal\PaypalFactory;
use InvalidArgumentException;

class Client
{
    private string $paymentMethod;

    public function __construct(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($checkPayment): bool
    {
        return $this->getPaymentMethod()->processPayment();
    }

    /**
     * آبجکتی طبق PaymentMethodFactoryInterface تحویل میدهد
     * @return PaymentMethodFactoryInterface
     */
    private function getPaymentMethod(): PaymentMethodFactoryInterface
    {
        if ($this->paymentMethod === 'paypal') {
            return new  PayPalFactory();
        } elseif ($this->paymentMethod === 'credit_card') {
            return new CreditCardFactory();
        } else {
            throw new InvalidArgumentException('Payment method not supported');
        }
    }
}
