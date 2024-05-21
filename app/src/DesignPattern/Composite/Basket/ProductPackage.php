<?php

namespace app\src\DesignPattern\Composite\Basket;

use app\src\DesignPattern\Composite\Basket\ProductItem;

class ProductPackage implements ProductItem
{
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function price(): float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price();
        }
        return $total;
    }
}
