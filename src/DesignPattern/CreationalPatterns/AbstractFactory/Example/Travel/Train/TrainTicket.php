<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Ticket;

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
