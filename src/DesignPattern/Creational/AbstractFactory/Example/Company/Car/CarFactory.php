<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\Car;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Chassis;
use src\DesignPattern\Creational\AbstractFactory\Example\Company\CompanyFactory;
use src\DesignPattern\Creational\AbstractFactory\Example\Company\Engin;
use src\DesignPattern\Creational\AbstractFactory\Example\Company\Gearbox;

class CarFactory implements CompanyFactory
{

    /**
     * @return Engin
     */
    public function CreateEngin(): Engin
    {
        return new CarCreateEngin();
    }

    /**
     * @return Gearbox
     */
    public function CreateGearbox(): Gearbox
    {
        return new CarCreateGirBox();
    }

    /**
     * @return Chassis
     */
    public function CreateChassis(): Chassis
    {
        return new CarCreateChassis();
    }
}
