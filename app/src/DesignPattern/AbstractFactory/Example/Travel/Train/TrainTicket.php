<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel\Train;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;

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
