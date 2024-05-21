<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;

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
