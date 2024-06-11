<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary;

abstract class Salary
{
    public function calculateSalary(): int
    {
       return $this->getBasicSalary() + $this->overtime();
    }

    protected function overtime() : int
    {
        return 0.1 * $this->getBasicSalary();
    }

    abstract protected function getBasicSalary(): int;

}