<?php

namespace src\DesignPattern\Composite\Basket;

class SingleProduct implements ProductItem
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function price(): float
    {
        return $this->price;
    }
}
