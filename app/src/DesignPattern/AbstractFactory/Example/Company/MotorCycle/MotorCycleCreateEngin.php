<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\MotorCycle;

use app\src\DesignPattern\AbstractFactory\Example\Company\Engin;

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
