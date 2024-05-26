<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

interface Account
{
    public function intrestRate(): float;

    public function minimumBalanceDefinition(): float;
}
