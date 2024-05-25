<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Gearbox;

class MotorCycleCreateGearBox implements GearBox
{
    /**
     * @return string
     */
    public function CreateGearbox(): string
    {
        return 'MotorCycle GearBox';
    }
}
