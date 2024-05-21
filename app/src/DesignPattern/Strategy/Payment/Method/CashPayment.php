<?php

namespace app\src\DesignPattern\Strategy\Payment\Method;

use app\src\DesignPattern\Strategy\Payment\Order;
use app\src\DesignPattern\Strategy\Payment\PaymentMethod;

class CashPayment implements PaymentMethod
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
