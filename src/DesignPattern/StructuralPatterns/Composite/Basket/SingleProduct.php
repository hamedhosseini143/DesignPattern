<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Basket;

class SingleProduct implements ProductItemInterface
{
    /**
     * @var float
     */
    private float $price;

    /**
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return $this->price;
    }
}
