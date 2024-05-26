<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Employees;

class EmployeeService
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @throws \Exception
     */
    public function calculateSalary(): Employees
    {
        return EmployeeSalaryFactory::calculateSalary($this->type);
    }
}
