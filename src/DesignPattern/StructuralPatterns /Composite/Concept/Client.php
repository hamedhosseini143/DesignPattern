<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Concept;

class Client
{
    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }


}
