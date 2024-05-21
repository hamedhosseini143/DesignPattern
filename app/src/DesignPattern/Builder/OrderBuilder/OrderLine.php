<?php

namespace app\src\DesignPattern\Builder\OrderBuilder;

class OrderLine
{
    private $product;
    private $quantity;
    private $price;

    /**
     * @param $product
     * @param $quantity
     * @param $price
     */
    public function __construct($product, $quantity, $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
