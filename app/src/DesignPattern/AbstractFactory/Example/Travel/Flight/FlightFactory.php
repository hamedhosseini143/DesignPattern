<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\Flight;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Flight\FlightTicket;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Flight\FlightTravel;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;
use app\src\DesignPattern\AbstractFactory\Example\Travel\TravelFactory;

class FlightFactory implements TravelFactory
{

    /**
     * @return Travel
     */
    public function craeteTravel(): Travel
    {
        return new FlightTravel();
    }

    /**
     * @return Ticket
     */
    public function createTecket(): Ticket
    {
        return new FlightTicket();
    }
}
