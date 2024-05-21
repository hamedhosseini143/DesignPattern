<?php

namespace app\src\DesignPattern\Strategy\Delivery\DeliveryMethod;

use app\src\DesignPattern\Strategy\Delivery\DeliveryMethod;
use app\src\DesignPattern\Strategy\Payment\Order;

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
