<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\Car;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Engin;

class CarCreateEngin implements Engin
{

    /**
     * @return string
     */
    public function CreateEngin(): string
    {
        return 'Car Engin';
    }
}
