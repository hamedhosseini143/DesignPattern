<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company\Car;

use app\src\DesignPattern\AbstractFactory\Example\Company\Engin;

class CarCreateEngin implements Engin
{

    /**
     * @return string
     */
    public function CreateEngin(): string
    {
        return 'Car Engin';
    }
}
