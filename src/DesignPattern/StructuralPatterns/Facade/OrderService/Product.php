<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;


class Product
{
    private int $price;
    private string $name;

    public function __construct(int $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function name(): string
    {
        return $this->name;
    }
}
