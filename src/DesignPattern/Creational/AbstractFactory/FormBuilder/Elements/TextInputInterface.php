<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements;

interface TextInputInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
