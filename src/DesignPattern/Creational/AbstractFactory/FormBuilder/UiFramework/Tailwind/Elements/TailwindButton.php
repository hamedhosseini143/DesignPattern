<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\Button;

class TailwindButton implements Button
{

    /**
     * @return mixed
     */
    public function render(): string
    {
        return ' <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">';
    }
}
