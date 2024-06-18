<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

class ClientDeleveryStrategy
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
    public function checkPay(Order $order): void
    {
        $deliveryMethod = new DeliveryServiceContext($this->deliveryMethod);
        $deliveryMethod->startDelivery($order);
    }

}
