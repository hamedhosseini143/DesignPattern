<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Ticket;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Travel;
use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\TravelFactory;

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
