<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface TextArea
{
    /**
     * @return string
     */
    public function render(): string;
}
