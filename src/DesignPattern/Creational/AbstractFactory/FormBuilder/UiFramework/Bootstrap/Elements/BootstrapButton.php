<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\ButtonInterface;

class BootstrapButton implements ButtonInterface
{
    /**
     * @return string
     * render button element in bootstrap
     */
    public function render(): string
    {
        return "<button class='btn btn-primary'>Submit</button>";
    }
}
