<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\Shoping;

class ClothingProducts implements Product
{

    /**
     * @return string
     */
    public function type(): string
    {
        return 'Clothing';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'Clothing';
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return 100;
    }

    /**
     * @return float
     */
    public function weghit(): float
    {
        return 0.5;
    }
}
