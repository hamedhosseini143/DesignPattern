<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\Example\Coffee;

class MilkCoffee extends CoffeeDecorator
{
    protected Coffee $coffee;

    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\Example\Coffee\Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function create(): string
    {
        return parent::create() . ' + Milk';
    }
}
