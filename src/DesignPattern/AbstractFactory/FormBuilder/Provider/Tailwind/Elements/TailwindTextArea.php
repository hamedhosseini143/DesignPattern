<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;

class TailwindTextArea implements TextArea
{

    /**
     * @return string
     */
    public function render(): string
    {
        return '<textarea class="border border-gray-300 rounded-md"></textarea>';
    }
}
