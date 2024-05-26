<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment\Method;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod;

class OnlinePayment implements PaymentMethod
{

    /**
     * @param Order $order
     * @return mixed
     */
    public function doPayment(Order $order)
    {
        // TODO: Implement doPayment() method.
    }
}
