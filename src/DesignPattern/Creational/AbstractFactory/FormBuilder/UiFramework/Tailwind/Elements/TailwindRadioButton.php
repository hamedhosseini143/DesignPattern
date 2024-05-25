<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButton;

class TailwindRadioButton implements RadioButton
{

    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="radio" class="form-radio">';
    }
}
