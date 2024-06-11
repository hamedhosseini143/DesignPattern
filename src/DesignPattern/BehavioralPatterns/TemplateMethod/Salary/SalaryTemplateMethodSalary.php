<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary;

class SalaryTemplateMethodSalary
{
    private Salary $salary;

    public function __construct(Salary $salary)
    {
        $this->salary = $salary;
    }

    public function calculateSalary(): int
    {
        return $this->salary->calculateSalary();
    }
}