<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

class GoldAccount implements Account
{

    public function intrestRate(): float
    {
        return 0.5;
    }

    public function minimumBalanceDefinition(): float
    {
        return 3000;
    }
}
