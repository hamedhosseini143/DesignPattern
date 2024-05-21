<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\Car;

use app\src\DesignPattern\AbstractFactory\Example\Company\Gearbox;

class CarCreateGirBox implements Gearbox
{

    /**
     * @return string
     */
    public function CreateGearbox(): string
    {
        return 'Car Gearbox';
    }
}
