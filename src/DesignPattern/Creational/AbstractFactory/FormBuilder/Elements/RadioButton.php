<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface RadioButton
{
    /**
     * @return string
     */
    public function render() : string;
}
