<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Employees;

class SalaryIncrease implements Employees
{

    /**
     * @return string
     */
    public function name(): string
    {
        return 'John Doe';
    }

    /**
     * @return string
     */
    public function position(): string
    {
        return 'Cashier';
    }

    /**
     * @return float
     */
    public function salary(): float
    {
        return 5;
    }
}
