<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\Car;

use app\src\DesignPattern\AbstractFactory\Example\Company\Chassis;
use app\src\DesignPattern\AbstractFactory\Example\Company\CompanyFactory;
use app\src\DesignPattern\AbstractFactory\Example\Company\Engin;
use app\src\DesignPattern\AbstractFactory\Example\Company\Gearbox;

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
