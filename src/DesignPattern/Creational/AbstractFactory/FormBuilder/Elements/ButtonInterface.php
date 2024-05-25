<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface ButtonInterface
{
    /**
     * @return string
     */
    public function render():string;
}
