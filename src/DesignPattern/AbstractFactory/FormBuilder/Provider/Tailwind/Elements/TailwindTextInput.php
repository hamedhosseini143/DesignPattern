<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;

class TailwindTextInput implements TextInput
{

    /**
     * @return string
     */
    public function render(): string
    {
        return ' <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">';
    }
}
