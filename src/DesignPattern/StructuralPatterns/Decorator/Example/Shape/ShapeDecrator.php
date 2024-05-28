<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\Example\Shape;

class ShapeDecrator implements Shape
{
    protected $shape;

    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\Example\Shape\Shape $shape)
    {
        $this->shape = $shape;
    }

    public function draw(): void
    {
        $this->shape->draw();
    }
}
