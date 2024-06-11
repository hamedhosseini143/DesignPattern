<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;


class Order
{
    /**
     * @var float
     */
    private float $amount;
    /**
     * @var array
     */
    private array $orderLines;
    /**
     * @var float
     */
    private float $discount;

    /**
     * @param float $amount
     * @param float $discount
     * @param array $orderLines
     */
    public function __construct(float $amount, float $discount, array $orderLines)
    {
        $this->amount = $amount;
        $this->discount = $discount;
        $this->orderLines = $orderLines;
    }

    public static function create(float $amount, float $discount, array $orderLines): self
    {
        return new self($amount, $discount, $orderLines);
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return array
     */
    public function getOrderLines(): array
    {
        return $this->orderLines;
    }


}
