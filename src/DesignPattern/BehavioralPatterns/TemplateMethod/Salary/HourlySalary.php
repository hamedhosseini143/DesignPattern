<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary;

class HourlySalary extends Salary
{

    /**
     * @return int
     */
    protected function getBasicSalary(): int
    {
        return 500;
    }
}