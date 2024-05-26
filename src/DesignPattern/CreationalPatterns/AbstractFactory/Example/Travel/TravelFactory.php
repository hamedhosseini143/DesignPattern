<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel;

interface TravelFactory
{
    public function craeteTravel(): Travel;
    public function createTecket(): Ticket;
}
