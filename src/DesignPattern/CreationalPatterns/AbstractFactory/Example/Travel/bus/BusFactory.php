<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\bus;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Ticket;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Travel;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\TravelFactory;

class BusFactory implements TravelFactory
{

    /**
     * @return Travel
     */
    public function craeteTravel(): Travel
    {
        return new BusTravel();
    }

    /**
     * @return Ticket
     */
    public function createTecket(): Ticket
    {
        return new BusTicket();
    }
}
