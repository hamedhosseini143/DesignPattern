<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Basket;

class Basket
{
    /**
     * @var array
     */
    private array $items = [];

    /**
     * @param ProductItemInterface $item
     * @return void
     */
    public function add(ProductItemInterface $item) : void
    {
        $this->items[] = $item;
    }

    /**
     * @return float
     */
    public function total() : float
    {
        $total = 0;
        if (!empty($this)) {
            foreach ($this->items as $item) {
                $total += $item->price();
            }
        }
        return $total;
    }
}
