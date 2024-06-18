<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

interface DeliveryMethodInterface
{
    /**
     * @param Order $order
     * @return mixed
     */
    public function price(Order $order);

    /**
     * @param Order $order
     * @return mixed
     */
    public function deliver(Order $order);
}
