<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\bus;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;

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
