<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Order;

class Phisical implements Order
{

    /**
     * @return float
     */
    public function price(): float
    {
        return 30.0;
    }

    /**
     * @return string
     */
    public function producType(): string
    {
        return 'Phisical';
    }
}
