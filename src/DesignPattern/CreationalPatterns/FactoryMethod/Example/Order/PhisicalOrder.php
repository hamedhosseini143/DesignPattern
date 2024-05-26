<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Order;

class PhisicalOrder extends OrderProcessor
{

    /**
     * @return Order
     */
    public function createOrder(): Order
    {
        return new Phisical();
    }
}
