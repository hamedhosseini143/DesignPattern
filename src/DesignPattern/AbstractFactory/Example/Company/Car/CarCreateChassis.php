<?php

namespace src\DesignPattern\AbstractFactory\Example\Company\Car;

use src\DesignPattern\AbstractFactory\Example\Company\Chassis;

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
