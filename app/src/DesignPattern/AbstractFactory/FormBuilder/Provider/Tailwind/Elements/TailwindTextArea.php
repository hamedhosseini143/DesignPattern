<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;

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
