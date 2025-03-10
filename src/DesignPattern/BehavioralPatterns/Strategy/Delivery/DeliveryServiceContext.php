<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;


class DeliveryServiceContext
{
    /**
     * @var DeliveryMethodInterface
     */
    private DeliveryMethodInterface $deliveryMethod;

    /**
     * @param DeliveryMethodInterface $deliveryMethod
     */
    public function __construct(DeliveryMethodInterface $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * @param Order $order
     * @return void
     */
    public function startDelivery(Order $order): void
    {
        $this->deliveryMethod->price($order);
        $this->deliveryMethod->deliver($order);
    }
}
