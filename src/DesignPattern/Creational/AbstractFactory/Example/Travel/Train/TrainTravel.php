<?php

namespace src\DesignPattern\Creational\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\Creational\AbstractFactory\Example\Travel\Travel;

class TrainTravel implements Travel
{

    /**
     * @return string
     */
    public function plan(): string
    {
        return 'Train Travel';
    }
}
