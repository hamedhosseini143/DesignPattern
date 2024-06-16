<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator;

class DiscountConstraints
{
    /**
     * @var int
     */
    private int $expiryDate;
    /**
     * @var int
     */
    private int $limit;
    /**
     * @var int
     */
    private int $minAmount = 0;
    /**
     * @var int
     */
    private int $maxAmount;
    /**
     * @var float
     */
    private float $percent;

    /**
     * @param int $expiryDate
     * @param int $limit
     * @param int $maxAmount
     * @param int $minAmount
     * @param float $percent
     */
    public function __construct(int $expiryDate, int $limit, int $maxAmount, int $minAmount, float $percent)
    {
        $this->expiryDate = $expiryDate;
        $this->limit = $limit;
        $this->maxAmount = $maxAmount;
        $this->minAmount = $minAmount;
        $this->percent = $percent;
    }

    /**
     * @return int
     */
    public function getExpiryDate(): int
    {
        return $this->expiryDate;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    /**
     * @return int
     */
    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }



}