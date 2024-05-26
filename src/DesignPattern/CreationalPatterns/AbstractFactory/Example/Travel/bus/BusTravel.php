<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\bus;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Travel;

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
