<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;


class Basket
{
    /**
     * @var array
     */
    private array $items;

    /**
     * @param Product $product
     * @return void
     */
    public function add(Product $product): void
    {
        $this->items[] = $product;
    }

    /**
     * @return string
     */
    public function coupon(): string
    {
        return 'DISCOUNT';
    }

    /**
     * @return array
     */
    public function items():array
    {
        return $this->items;
    }

}