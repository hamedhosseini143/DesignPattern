<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\Paypal;

use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;
use app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Provider\PaymentProviderInterface;

class PayPal implements PaymentProviderInterface
{
    /**
     * @inheritDoc
     * @return bool
     */
    public function processPayment(Order $order): bool
    {
        echo  "Processing payment with PayPal";
        return true;
    }
}