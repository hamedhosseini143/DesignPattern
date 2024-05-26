<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements;

interface ButtonInterface
{
    /**
     * @return string
     */
    public function render():string;
}
