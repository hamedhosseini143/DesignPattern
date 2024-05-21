<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;

class BootstrapTextArea implements TextArea
{

    public function render(): string
    {
        return "<textarea class='form-control'></textarea>";
    }
}
