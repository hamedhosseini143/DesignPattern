<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Employees;

class CashSalary
{
    public function name(): string
    {
        return 'John Doe';
    }

    public function position(): string
    {
        return 'Cashier';
    }

    public function salary(): float
    {
        return 1000;
    }
}
