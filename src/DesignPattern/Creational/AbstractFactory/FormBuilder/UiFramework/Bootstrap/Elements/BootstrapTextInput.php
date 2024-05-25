<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInput;

class BootstrapTextInput implements TextInput
{

    /**
     * @return string
     */
    public function render(): string
    {
        return "<input type='text' class='form-control'>";
    }
}
