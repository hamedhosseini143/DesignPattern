<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Order;

class DownloadOrder extends OrderProcessor
{

    /**
     * @return Order
     */
    public function createOrder(): Order
    {
        return new Download();
    }
}
