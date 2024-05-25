<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButton;

class BootstrapRadoButton implements RadioButton
{


    /**
     * @return string
     * render radio button element in bootstrap
     */
    public function render(): string
    {
        return "<input type='radio' class='form-control'>";
    }
}
