<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Travel;

use app\src\DesignPattern\AbstractFactory\Example\Travel\Ticket;
use app\src\DesignPattern\AbstractFactory\Example\Travel\Travel;

interface TravelFactory
{
    public function craeteTravel(): Travel;
    public function createTecket(): Ticket;
}
