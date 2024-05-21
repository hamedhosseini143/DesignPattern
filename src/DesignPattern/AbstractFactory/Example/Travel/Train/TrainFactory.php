<?php

namespace src\DesignPattern\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use src\DesignPattern\AbstractFactory\Example\Travel\Travel;
use src\DesignPattern\AbstractFactory\Example\Travel\TravelFactory;

class TrainFactory implements TravelFactory
{

    /**
     * @return Travel
     */
    public function craeteTravel(): Travel
    {
        return new TrainTravel();
    }

    /**
     * @return Ticket
     */
    public function createTecket(): Ticket
    {
        return new TrainTicket();
    }
}
