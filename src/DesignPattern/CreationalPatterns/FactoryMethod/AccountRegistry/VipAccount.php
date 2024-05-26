<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

class VipAccount implements Account
{

    public function intrestRate(): float
    {
       return 0.05;
    }

    public function minimumBalanceDefinition(): float
    {
        return 1000;
    }
}
