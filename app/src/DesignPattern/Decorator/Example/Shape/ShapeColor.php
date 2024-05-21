<?php

namespace app\src\DesignPattern\Decorator\Example\Shape;

use app\src\DesignPattern\Decorator\Example\Shape\Shape;
use app\src\DesignPattern\Decorator\Example\Shape\ShapeDecrator;

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
