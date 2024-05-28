<?php

namespace src\DesignPattern\StructuralPatterns\Composite\Concept;

class Client
{
    /**
     * @var ComponentInterface
     */
    private ComponentInterface  $component;

    /**
     * @param ComponentInterface $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * @return string
     */
    public function operation(): string
    {
        return $this->component->operation();
    }

}
