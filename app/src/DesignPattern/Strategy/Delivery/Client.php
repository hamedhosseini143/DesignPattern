<?php

namespace app\src\DesignPattern\Strategy\Delivery;

use app\src\DesignPattern\Strategy\Delivery\DeliveryServiceContext;
use app\src\DesignPattern\Strategy\Payment\Order;

class Client
{
    private $deliveryMethod;

    /**
     * @param $deliveryMethod
     */
    public function __construct($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function checkPay(Order $order): void
    {
        $deliveryMethod = new DeliveryServiceContext($this->deliveryMethod);
        $deliveryMethod->price($order);
    }

}
