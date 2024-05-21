<?php

namespace app\src\DesignPattern\Strategy\Payment;

use app\src\DesignPattern\Strategy\Payment\Order;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
