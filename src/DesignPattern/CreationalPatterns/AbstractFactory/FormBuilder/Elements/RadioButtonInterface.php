<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements;

interface RadioButtonInterface
{
    /**
     * @return string
     */
    public function render() : string;
}
