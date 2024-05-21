<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\Train;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;
use app\src\DesignPattern\AbstractFactory\Example\Travel\TravelFactory;

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
