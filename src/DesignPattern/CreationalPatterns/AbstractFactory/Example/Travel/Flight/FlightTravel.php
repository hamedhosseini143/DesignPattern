<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Flight;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Travel;

class FlightTravel implements Travel
{

    /**
     * @return string
     */
    public function plan(): string
    {
        return 'Flight Travel';
    }
}
