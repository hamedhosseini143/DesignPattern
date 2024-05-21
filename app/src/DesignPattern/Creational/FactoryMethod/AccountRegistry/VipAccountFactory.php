<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

class VipAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
           return new VipAccount();
    }
}
