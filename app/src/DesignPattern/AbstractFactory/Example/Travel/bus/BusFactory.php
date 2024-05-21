<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\bus;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use app\src\DesignPattern\AbstractFactory\Example\Travel\bus\BusTravel;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;
use app\src\DesignPattern\AbstractFactory\Example\Travel\TravelFactory;
use app\src\DesignPattern\AbstractFactory\Example\Travel\bus\BusTicket;

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
