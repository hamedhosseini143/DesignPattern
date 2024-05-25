<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Travel\Flight;

use src\DesignPattern\Creational\AbstractFactory\Example\Travel\Ticket;
use src\DesignPattern\Creational\AbstractFactory\Example\Travel\Travel;
use src\DesignPattern\Creational\AbstractFactory\Example\Travel\TravelFactory;

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
