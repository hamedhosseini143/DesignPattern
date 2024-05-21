<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart\CreditCardFactory;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal\PaypalFactory;
use InvalidArgumentException;

class Client
{
    /**
     * @var Order
     */
    private Order $order;
    /**
     * @var string
     */
    private string $paymentMethod;

    /**
     * @param string $paymentMethod
     * @param Order $order
     */
    public function __construct(string $paymentMethod, Order $order)
    {
        $this->paymentMethod = $paymentMethod;
        $this->order = $order;
    }

    /**
     * @return bool
     */
    public function processPayment(): bool
    {
        return $this->getPaymentMethod()->processPayment($this->order);
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
