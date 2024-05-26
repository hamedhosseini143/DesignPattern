<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Car;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Chassis;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\CompanyFactory;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Engin;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Gearbox;

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
