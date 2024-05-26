<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\MotorCycle;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company\Engin;

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
