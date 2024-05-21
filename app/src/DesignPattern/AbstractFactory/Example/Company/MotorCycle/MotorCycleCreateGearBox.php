<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle;

use app\src\DesignPattern\AbstractFactory\Example\Company\Gearbox;

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
