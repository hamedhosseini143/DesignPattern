<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethodInterface;

class CashPayment implements PaymentMethodInterface
{

    /**
     * @param Order $order
     * @return void
     */
    public function doPayment(Order $order): void
    {
        echo "Cash payment of order with price: " . $order->getPrice() . PHP_EOL;
    }
}
