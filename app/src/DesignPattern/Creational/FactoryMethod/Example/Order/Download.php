<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Order;

class Download implements Order
{

    /**
     * @return float
     */
    public function price(): float
    {
        return 10.0;
    }

    /**
     * @return string
     */
    public function producType(): string
    {
        return 'Download';
    }
}
