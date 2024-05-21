<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;

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
