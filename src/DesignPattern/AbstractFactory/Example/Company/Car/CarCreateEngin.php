<?php

namespace src\DesignPattern\AbstractFactory\Example\Company\Car;

use src\DesignPattern\AbstractFactory\Example\Company\Engin;

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
