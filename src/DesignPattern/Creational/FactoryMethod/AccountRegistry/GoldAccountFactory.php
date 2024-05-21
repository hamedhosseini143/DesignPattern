<?php

namespace src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

class GoldAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GoldAccount();
    }
}

