<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\Creational\AbstractFactory\Example\Company\Engin;

class MotorCycleCreateEngin implements Engin
{
    /**
     * @return string
     */
    public function CreateEngin(): string
    {
        return 'MotorCycle Engin';
    }
}
