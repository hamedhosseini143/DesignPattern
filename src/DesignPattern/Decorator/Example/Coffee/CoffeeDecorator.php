<?php

namespace src\DesignPattern\Decorator\Example\Coffee;

class CoffeeDecorator implements Coffee
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function create(): string
    {
        return $this->coffee->create();
    }
}
