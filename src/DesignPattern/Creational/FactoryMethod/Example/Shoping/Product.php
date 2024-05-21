<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\Shoping;

interface Product
{
    public function type():string;
    public function name():string;
    public function price():float;
    public function weghit():float;

}
