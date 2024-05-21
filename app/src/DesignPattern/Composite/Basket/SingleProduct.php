<?php

namespace app\src\DesignPattern\Composite\Basket;

use app\src\DesignPattern\Composite\Basket\ProductItem;

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
