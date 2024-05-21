<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;

class BootstrapButton implements Button
{

    public function render(): string
    {
        return "<button class='btn btn-primary'>Submit</button>";
    }
}
