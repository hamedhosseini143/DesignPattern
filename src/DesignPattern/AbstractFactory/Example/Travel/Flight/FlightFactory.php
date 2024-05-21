<?php

namespace src\DesignPattern\AbstractFactory\Example\Travel\Flight;

use src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use src\DesignPattern\AbstractFactory\Example\Travel\Travel;
use src\DesignPattern\AbstractFactory\Example\Travel\TravelFactory;

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
