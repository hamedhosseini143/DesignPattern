<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

class DeliveryServiceContext
{
    private DeliveryMethod $deliveryMethod;

    /**
     * @param DeliveryMethod $deliveryMethod
     */
    public function __construct(DeliveryMethod $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function price(Order $order): void
    {
        $this->deliveryMethod->price($order);
        $this->deliveryMethod->deliver($order);
    }
}
