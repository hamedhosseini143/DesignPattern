<?php

namespace app\src\DesignPattern\Decorator\Example\Coffee;

use app\src\DesignPattern\Decorator\Example\Coffee\Coffee;

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
