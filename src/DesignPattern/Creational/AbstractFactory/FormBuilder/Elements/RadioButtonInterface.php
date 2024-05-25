<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface RadioButtonInterface
{
    /**
     * @return string
     */
    public function render() : string;
}
