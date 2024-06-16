<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator;

class Discount
{
    /**
     * @var string
     */
    private string $code;
    /**
     * @var int
     */
    private int $userId;
    /**
     * @var DiscountConstraints
     */
    private DiscountConstraints $constraints;

    /**
     * @param string $code
     * @param int $userId
     * @param DiscountConstraints $constraints
     */
    public function __construct(string $code, int $userId, DiscountConstraints $constraints)
    {
        $this->code = $code;
        $this->userId = $userId;
        $this->constraints = $constraints;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return DiscountConstraints
     */
    public function getConstraints(): DiscountConstraints
    {
        return $this->constraints;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

}