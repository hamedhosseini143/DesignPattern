<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment;

class Order
{
    private int $price;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

}
