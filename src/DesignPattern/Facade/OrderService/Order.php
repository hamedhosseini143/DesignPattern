<?php

namespace src\DesignPattern\Facade\OrderService;

class Order
{
    private $userId;
    private $amount;
    private $orderLines;
    private $discount;

    /**
     * @param $userId
     * @param $amount
     * @param $orderLines
     * @param $discount
     */
    public function __construct($userId, $amount, $orderLines, $discount)
    {
        $this->userId = $userId;
        $this->amount = $amount;
        $this->orderLines = $orderLines;
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getAmount() : int
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getOrderLines() : array
    {
        return $this->orderLines;
    }

    /**
     * @return mixed
     */
    public function getDiscount() : float
    {
        return $this->discount;
    }

}
