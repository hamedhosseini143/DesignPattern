<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;

class BootstrapRadoButton implements RadioButton
{

    public function render()
    {
        return "<input type='radio' class='form-control'>";
    }
}
