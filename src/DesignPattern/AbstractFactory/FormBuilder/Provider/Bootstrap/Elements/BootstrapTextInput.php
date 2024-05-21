<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;

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
