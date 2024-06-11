<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary;

class OnSiteSalary extends Salary
{

    /**
     * @return int
     */
    protected function getBasicSalary(): int
    {
        return 5000;
    }
}