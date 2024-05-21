<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Employees;

class VacationSalary implements Employees
{

    /**
     * @return string
     */
    public function name(): string
    {
        return 'Devid';
    }

    /**
     * @return string
     */
    public function position(): string
    {
        return 'Developer';
    }

    /**
     * @return float
     */
    public function salary(): float
    {
        return 100;
    }
}
