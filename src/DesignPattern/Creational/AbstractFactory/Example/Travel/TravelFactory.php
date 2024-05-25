<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Travel;

interface TravelFactory
{
    public function craeteTravel(): Travel;
    public function createTecket(): Ticket;
}
