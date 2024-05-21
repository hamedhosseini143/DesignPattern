<?php

namespace app\src\DesignPattern\Decorator\Example\Coffee;

class MilkCoffee extends CoffeeDecorator
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function create(): string
    {
        return parent::create() . ' + Milk';
    }
}
