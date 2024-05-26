<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Concept;

class Composit implements Component
{
    private $components = [];

    public function addComponent(\src\DesignPattern\StructuralPatterns \Composite\Concept\Component $component)
    {
        $this->components[] = $component;
    }
    /**
     * @return string
     */
    public function operation(): string
    {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }
}
