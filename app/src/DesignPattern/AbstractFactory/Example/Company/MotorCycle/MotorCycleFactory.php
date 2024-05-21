<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle;

use app\src\DesignPattern\AbstractFactory\Example\Company\Chassis;
use app\src\DesignPattern\AbstractFactory\Example\Company\CompanyFactory;
use app\src\DesignPattern\AbstractFactory\Example\Company\Engin;
use app\src\DesignPattern\AbstractFactory\Example\Company\Gearbox;
use app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle\MotorCycleCreateChassis;
use app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle\MotorCycleCreateEngin;
use app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle\MotorCycleCreateGearBox;

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
