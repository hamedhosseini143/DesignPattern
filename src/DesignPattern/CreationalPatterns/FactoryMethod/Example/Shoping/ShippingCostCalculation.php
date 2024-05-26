<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Shoping;

abstract class ShippingCostCalculation
{
    public function calculateShippingCost(): float
    {
        return $this->calculate() * 1.2;
    }
    abstract public function calculate(): float;
}
