<?php

namespace src\DesignPattern\Creational\Builder\OrderBuilder;

class OrderService
{
    public function reOrder()
    {
        $order = Order::forge()
            ->withCustomer('John')
            ->withTotalPrice(100)
            ->withFinalPrice(90)
            ->withDeliveryAddress('123 Main St')
            ->withOrderLines([
                new OrderLine('Product 1', 1, 10),
                new OrderLine('Product 2', 2, 20),
            ])
            ->withStatus('pending')
            ->build();

    }
}
