<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\Car;

use app\src\DesignPattern\AbstractFactory\Example\Company\Chassis;

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
