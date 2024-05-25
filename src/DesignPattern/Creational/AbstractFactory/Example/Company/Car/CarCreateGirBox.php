<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\Car;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Gearbox;

class CarCreateGirBox implements Gearbox
{

    /**
     * @return string
     */
    public function CreateGearbox(): string
    {
        return 'Car Gearbox';
    }
}
