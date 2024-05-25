<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextAreaInterface;

class TailwindTextAreaInterface implements TextAreaInterface
{

    /**
     * @return string
     */
    public function render(): string
    {
        return '<textarea class="border border-gray-300 rounded-md"></textarea>';
    }
}
