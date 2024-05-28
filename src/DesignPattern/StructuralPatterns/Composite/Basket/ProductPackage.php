<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Basket;

class ProductPackage implements ProductItemInterface
{
    /**
     * @var array
     */
    private array $products;

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return float
     */
    public function price(): float
    {
        $total = 0;
        if (!empty($this->products)) {
            foreach ($this->products as $product) $total += $product->price();
        }
        return $total;
    }
}
