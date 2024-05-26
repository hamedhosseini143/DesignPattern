<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

class GeneralAccount implements Account
{
    public function intrestRate(): float
    {
        return 0.02;
    }

    public function minimumBalanceDefinition(): float
    {
        return 100;
    }
}
