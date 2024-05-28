<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Concept;

class Composite implements ComponentInterface
{
    /**
     * @var array
     */
    private array $components = [];

    /**
     * @param ComponentInterface $component
     * @return void
     */
    public function addComponent(ComponentInterface $component): void
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
