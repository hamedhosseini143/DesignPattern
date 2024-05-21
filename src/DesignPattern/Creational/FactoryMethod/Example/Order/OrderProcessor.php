<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\Order;

abstract class OrderProcessor
{
    public function processOrder(): void
    {
        $order = $this->createOrder();
        $this->sendOrder($order);
    }

    abstract public function createOrder(): Order;

    private function sendOrder(Order $order): void
    {
        echo "Order sent: {$order->producType()} - Price: {$order->price()}\n";
    }
}
