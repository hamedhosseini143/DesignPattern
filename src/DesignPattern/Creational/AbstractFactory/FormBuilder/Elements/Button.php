<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface Button
{
    /**
     * @return string
     */
    public function render():string;
}
