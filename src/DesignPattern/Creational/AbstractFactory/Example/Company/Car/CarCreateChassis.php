<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\Car;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Chassis;

class CarCreateChassis implements Chassis
{

    /**
     * @return string
     */
    public function CreateChassis(): string
    {
        return 'Car Chassis';
    }
}
