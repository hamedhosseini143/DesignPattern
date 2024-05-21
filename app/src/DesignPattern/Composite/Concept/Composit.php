<?php

namespace app\src\DesignPattern\Composite\Concept;

class Composit implements Component
{
    private $components = [];

    public function addComponent(Component $component)
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
