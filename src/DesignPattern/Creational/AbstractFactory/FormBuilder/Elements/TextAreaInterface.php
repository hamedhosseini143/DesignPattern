<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface TextAreaInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
