<?php

namespace src\DesignPattern\Decorator\Example\Shape;

class ShapeDecrator implements Shape
{
    protected $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function draw(): void
    {
        $this->shape->draw();
    }
}
