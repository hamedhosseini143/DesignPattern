<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Shoping;

interface Product
{
    public function type():string;
    public function name():string;
    public function price():float;
    public function weghit():float;

}
