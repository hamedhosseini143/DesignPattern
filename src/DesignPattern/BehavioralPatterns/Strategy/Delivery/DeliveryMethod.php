<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

interface DeliveryMethod
{
    public function price(Order $order);
    public function deliver(Order $order);
}
