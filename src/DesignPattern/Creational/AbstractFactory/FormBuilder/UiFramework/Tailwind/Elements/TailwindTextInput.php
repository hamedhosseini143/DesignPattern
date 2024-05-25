<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInputInterface;

class TailwindTextInput implements TextInputInterface
{

    /**
     * @return string
     */
    public function render(): string
    {
        return ' <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">';
    }
}
