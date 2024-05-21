<?php

namespace src\DesignPattern\Creational\FactoryMethod\PaymentMethod;

class Order
{
    /**
     * @var int
     */
    private int $totalPrice;
    /**
     * @var bool
     */
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

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

}