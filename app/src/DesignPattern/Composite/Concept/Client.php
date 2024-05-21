<?php

namespace app\src\DesignPattern\Composite\Concept;

use app\src\DesignPattern\Composite\Concept\Component;

class Client
{
    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }


}
