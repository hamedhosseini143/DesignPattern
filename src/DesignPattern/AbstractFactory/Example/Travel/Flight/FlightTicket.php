<?php

namespace src\DesignPattern\AbstractFactory\Example\Travel\Flight;

use src\DesignPattern\AbstractFactory\Example\Travel\Ticket;

class FlightTicket implements Ticket
{

    /**
     * @return string
     */
    public function book(): string
    {
        return 'Flight ticket booked';
    }
}
