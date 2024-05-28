<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Concept;

class Leaf implements ComponentInterface
{

    /**
     * @return string
     */
    public function operation(): string
    {
        return 'Leaf';
    }
}
