<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

class Order
{
    private int $totalPrice;
    private bool $status;

    /**
     * @param int $totalPrice
     * @param bool $status
     */
    public function __construct(int $totalPrice, bool $status)
    {
        $this->totalPrice = $totalPrice;
        $this->status = $status;
    }

    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

}