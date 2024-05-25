<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInputInterface;

class BootstrapTextInput implements TextInputInterface
{

    /**
     * @return string
     */
    public function render(): string
    {
        return "<input type='text' class='form-control'>";
    }
}
