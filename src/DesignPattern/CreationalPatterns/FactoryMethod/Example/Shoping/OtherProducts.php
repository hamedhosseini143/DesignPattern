<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Shoping;

class OtherProducts implements Product
{

    /**
     * @return string
     */
    public function type(): string
    {
        return 'Other';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'Other Product';
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return 50;
    }

    /**
     * @return float
     */
    public function weghit(): float
    {
        return 0.5;
    }
}
