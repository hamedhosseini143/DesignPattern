<?php

namespace app\src\DesignPattern\Strategy\Delivery;

use app\src\DesignPattern\Strategy\Payment\Order;

interface DeliveryMethod
{
    public function price(Order $order);
    public function deliver(Order $order);
}
