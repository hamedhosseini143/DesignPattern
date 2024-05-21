<?php

namespace src\DesignPattern\AbstractFactory\Example\Travel\Flight;

use src\DesignPattern\AbstractFactory\Example\Travel\Travel;

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
