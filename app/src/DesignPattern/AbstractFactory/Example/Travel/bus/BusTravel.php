<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\bus;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;

class BusTravel implements Travel
{

    /**
     * @return string
     */
    public function plan(): string
    {
        return 'Bus Travel';
    }
}
