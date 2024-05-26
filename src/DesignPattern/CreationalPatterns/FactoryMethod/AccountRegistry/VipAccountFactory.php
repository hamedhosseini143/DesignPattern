<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

class VipAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
           return new VipAccount();
    }
}
