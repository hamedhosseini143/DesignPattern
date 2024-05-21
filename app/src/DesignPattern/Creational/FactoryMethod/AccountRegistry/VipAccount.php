<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

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
