<?php

namespace src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

interface Account
{
    public function intrestRate(): float;

    public function minimumBalanceDefinition(): float;
}
