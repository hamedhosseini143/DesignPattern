<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Employees;

class EmployeeSalaryFactory
{
    static public function calculateSalary($type): Employees
    {
        return match ($type) {
            'salary_increase' => new SalaryIncrease(),
            'vacation_salary' => new VacationSalary(),
            'cash_salary' => new CashSalary(),
            default => throw new \Exception('Invalid type'),
        };
    }
}
