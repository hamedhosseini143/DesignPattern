<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;

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
