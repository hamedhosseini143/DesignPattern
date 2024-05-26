<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

class GeneralAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GeneralAccount();
    }
}
