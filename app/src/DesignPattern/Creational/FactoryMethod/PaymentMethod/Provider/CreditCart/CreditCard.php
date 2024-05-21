<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\CreaditCart;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class CreditCard implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(Order $order ): bool
    {
        echo "Processing payment with Credit Card\n";
        return true;
    }
}