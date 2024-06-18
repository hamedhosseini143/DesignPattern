<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider;

class Invoice
{
    private int $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function amount(): int
    {
        if ($this->amount <= 0) {
            throw new \InvalidArgumentException('Invalid amount');
        }
        return $this->amount;
    }
}
