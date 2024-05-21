<?php

namespace src\DesignPattern\Strategy\Payment\Method;

use src\DesignPattern\Strategy\Payment\Order;
use src\DesignPattern\Strategy\Payment\PaymentMethod;

class ChequePayment implements PaymentMethod
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
