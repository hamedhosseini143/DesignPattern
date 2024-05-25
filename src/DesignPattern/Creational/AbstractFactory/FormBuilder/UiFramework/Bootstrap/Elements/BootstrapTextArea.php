<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextArea;

class BootstrapTextArea implements TextArea
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
