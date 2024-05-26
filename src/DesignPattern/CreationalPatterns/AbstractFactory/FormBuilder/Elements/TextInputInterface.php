<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements;

interface TextInputInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
