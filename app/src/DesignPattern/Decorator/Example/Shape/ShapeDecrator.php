<?php

namespace app\src\DesignPattern\Decorator\Example\Shape;

use app\src\DesignPattern\Decorator\Example\Shape\Shape;

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
