<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;

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
