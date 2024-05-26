<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements;

interface TextAreaInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
