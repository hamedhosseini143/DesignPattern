<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart\CreditCardFactory;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal\PaypalFactory;
use InvalidArgumentException;

class Client
{
    /**
     * @var string
     */
    private string $paymentMethod;

    /**
     * @param string $paymentMethod
     */
    public function __construct(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @param $checkPayment
     * @return bool
     */
    public function processPayment($checkPayment): bool
    {
        return $this->getPaymentMethod()->processPayment();
    }

    /**
     *  return an object of the PaymentMethodFactoryInterface
     * @return PaymentMethodFactoryInterface
     */
    private function getPaymentMethod(): PaymentMethodFactoryInterface
    {
        return match ($this->paymentMethod) {
            'paypal' => new PayPalFactory(),
            'credit_card' => new CreditCardFactory(),
            default => throw new InvalidArgumentException('Payment method not supported'),
        };
    }
}
