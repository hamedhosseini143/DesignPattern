<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;

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
