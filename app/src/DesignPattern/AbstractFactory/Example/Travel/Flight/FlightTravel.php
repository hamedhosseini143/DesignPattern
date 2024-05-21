<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\Flight;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;

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
