<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\Creational\AbstractFactory\Example\Travel\Ticket;

class TrainTicket implements Ticket
{

    /**
     * @return string
     */
    public function book(): string
    {
        return 'Train Ticket';
    }
}
