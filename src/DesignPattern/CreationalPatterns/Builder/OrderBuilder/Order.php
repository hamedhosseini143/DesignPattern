<?php

namespace src\DesignPattern\CreationalPatterns\Builder\OrderBuilder;

class Order
{
    private int $customerId;
    private int $totalPrice;
    private int $finalPrice;
    private string $deliveryAddress;
    private int $orderLines;
    private bool $status;

    /**
     * @param int $customerId
     * @param string $deliveryAddress
     * @param int $finalPrice
     * @param int $orderLines
     * @param bool $status
     * @param int $totalPrice
     */
    public function __construct(int $customerId, string $deliveryAddress, int $finalPrice, int $orderLines, bool $status, int $totalPrice)
    {
        $this->customerId = $customerId;
        $this->deliveryAddress = $deliveryAddress;
        $this->finalPrice = $finalPrice;
        $this->orderLines = $orderLines;
        $this->status = $status;
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    /**
     * @return int
     */
    public function getFinalPrice(): int
    {
        return $this->finalPrice;
    }

    /**
     * @return int
     */
    public function getOrderLines(): int
    {
        return $this->orderLines;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

}
