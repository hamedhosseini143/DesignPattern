<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator;

class Client
{
    private DiscountFactory $discountFactory;

    public function __construct(DiscountFactory $discountFactory)
    {
        $this->discountFactory = $discountFactory;
    }

    public function generateDiscounts(): void
    {
        foreach (range(1, 100) as $i) {
            $this->discountFactory->createDiscount('code' . $i, $i, time() + 3600, 1, 100, 1000, 10);
        }
        echo 'Discounts generated: ' . count($this->discountFactory->getDiscountList()) . PHP_EOL;
    }
}