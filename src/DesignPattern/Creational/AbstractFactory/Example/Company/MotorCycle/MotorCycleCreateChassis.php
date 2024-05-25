<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Chassis;

class MotorCycleCreateChassis implements Chassis
{
    /**
     * @return string
     */
    public function CreateChassis(): string
    {
        return 'MotorCycle Chassis';
    }
}
