<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Car;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Chassis;

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
