<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary;

class RemoteSalary extends Salary
{

    /**
     * @return int
     */
    protected function getBasicSalary(): int
    {
        return 2500;
    }
}