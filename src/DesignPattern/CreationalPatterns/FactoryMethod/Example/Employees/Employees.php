<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Employees;

interface Employees
{
    public function name(): string;

    public function position(): string;

    public function salary(): float;
}
