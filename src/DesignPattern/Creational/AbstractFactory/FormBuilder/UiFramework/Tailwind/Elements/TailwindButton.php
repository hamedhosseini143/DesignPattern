<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\ButtonInterface;

class TailwindButton implements ButtonInterface
{

    /**
     * @return mixed
     */
    public function render(): string
    {
        return ' <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">';
    }
}
