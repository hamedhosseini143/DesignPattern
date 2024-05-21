<?php

namespace src\DesignPattern\Strategy\Delivery;

use src\DesignPattern\Strategy\Payment\Order;

interface DeliveryMethod
{
    public function price(Order $order);
    public function deliver(Order $order);
}
