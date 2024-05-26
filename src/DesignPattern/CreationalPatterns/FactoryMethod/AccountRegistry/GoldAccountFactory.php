<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

class GoldAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GoldAccount();
    }
}

