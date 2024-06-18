<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Delivery\DeliveryMethod;

use src\DesignPattern\BehavioralPatterns\Strategy\Delivery\DeliveryMethodInterface;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\Order;

class ExpressMethodDelivery implements DeliveryMethodInterface
{
    private const DELIVERY_COST = 10;

    private int $finalPrice;

    /**
     * @param Order $order
     * @return int
     */
    public function price(Order $order): int
    {
        $this->finalPrice = $order->getPrice() + self::DELIVERY_COST;
        return $this->finalPrice;
    }

    /**
     * @param Order $order
     * @return void
     */
    public function deliver(Order $order) : void
    {
        echo "Delivering order by Express Method Delivery with final price of {$this->finalPrice}";
    }
}
