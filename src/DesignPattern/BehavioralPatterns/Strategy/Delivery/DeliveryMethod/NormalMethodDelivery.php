<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery\DeliveryMethod;

use src\DesignPattern\BehavioralPatterns\Strategy\Delivery\DeliveryMethod;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

class NormalMethodDelivery implements DeliveryMethod
{

    /**
     * @param Order $order
     * @return mixed
     */
    public function price(Order $order)
    {
        // TODO: Implement price() method.
    }

    /**
     * @param Order $order
     * @return mixed
     */
    public function deliver(Order $order)
    {
        // TODO: Implement deliver() method.
    }
}
