<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Basket;

class Basket
{
    private $items = [];

    public function add(ProductItem $item) : void
    {
        $this->items[] = $item;
    }

    public function total() : float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price();
        }
        return $total;
    }
}
