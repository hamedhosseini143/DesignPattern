<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Train;

use src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Travel\Travel;

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
