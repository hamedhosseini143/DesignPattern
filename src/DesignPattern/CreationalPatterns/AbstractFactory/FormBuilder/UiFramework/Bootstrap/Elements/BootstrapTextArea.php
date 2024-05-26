<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;

class BootstrapTextArea implements TextAreaInterface
{

    /**
     * @return string
     * render text area element in bootstrap
     */
    public function render(): string
    {
        return "<textarea class='form-control'></textarea>";
    }
}
