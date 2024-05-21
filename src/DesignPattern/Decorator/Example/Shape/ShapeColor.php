<?php

namespace src\DesignPattern\Decorator\Example\Shape;

class ShapeColor extends ShapeDecrator
{
    protected $color;

    public function __construct(Shape $shape, string $color)
    {
        parent::__construct($shape);
        $this->color = $color;
    }

    public function draw(): void
    {
        parent::draw();
        echo "Color: {$this->color}\n";
    }
}
