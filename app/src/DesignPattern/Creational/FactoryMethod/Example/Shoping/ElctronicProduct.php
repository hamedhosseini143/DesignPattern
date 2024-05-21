<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Shoping;

class ElctronicProduct implements Product
{

    /**
     * @return string
     */
    public function type(): string
    {
        return 'Elctronic';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'Elctronic Product';
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return 1000;
    }

    /**
     * @return float
     */
    public function weghit(): float
    {
        return 1.5;
    }
}
