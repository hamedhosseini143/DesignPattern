<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethodInterface;

class ChequePayment implements PaymentMethodInterface
{

    /**
     * @param Order $order
     * @return void
     */
    public function doPayment(Order $order): void
    {
       echo "Cheque payment of order with price: " . $order->getPrice() . PHP_EOL;
    }
}
