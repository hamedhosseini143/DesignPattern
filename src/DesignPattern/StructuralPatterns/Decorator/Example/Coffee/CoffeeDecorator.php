<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\Example\Coffee;

class CoffeeDecorator implements Coffee
{
    protected \src\DesignPattern\StructuralPatterns \Decorator\Example\Coffee\Coffee $coffee;

    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\Example\Coffee\Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function create(): string
    {
        return $this->coffee->create();
    }
}
