<?php

namespace src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

class VipAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
           return new VipAccount();
    }
}
