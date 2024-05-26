<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Gearbox;

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
