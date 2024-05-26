<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\bus;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Ticket;

class BusTicket implements Ticket
{

    /**
     * @return string
     */
    public function book(): string
    {
        return 'Bus ticket booked';
    }
}
