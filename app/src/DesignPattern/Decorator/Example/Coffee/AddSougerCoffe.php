<?php

namespace app\src\DesignPattern\Decorator\Example\Coffee;

class AddSougerCoffe extends CoffeeDecorator
{
    public function create(): string
    {
        return parent::create() . ' + Souger';
    }
}
