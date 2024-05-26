<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Chassis;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\CompanyFactory;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Engin;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Gearbox;

class MotorCycleFactory implements CompanyFactory
{

    /**
     * @return Engin
     */
    public function CreateEngin(): Engin
    {
        return new MotorCycleCreateEngin();
    }

    /**
     * @return Gearbox
     */
    public function CreateGearbox(): Gearbox
    {
        return new MotorCycleCreateGearBox();
    }

    /**
     * @return Chassis
     */
    public function CreateChassis(): Chassis
    {
        return new MotorCycleCreateChassis();
    }
}
