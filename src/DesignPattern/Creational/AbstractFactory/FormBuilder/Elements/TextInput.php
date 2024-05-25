<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface TextInput
{
    /**
     * @return string
     */
    public function render(): string;
}
