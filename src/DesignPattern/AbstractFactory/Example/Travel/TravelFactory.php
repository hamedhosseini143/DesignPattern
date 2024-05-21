<?php

namespace src\DesignPattern\AbstractFactory\Example\Travel;

interface TravelFactory
{
    public function craeteTravel(): Travel;
    public function createTecket(): Ticket;
}
