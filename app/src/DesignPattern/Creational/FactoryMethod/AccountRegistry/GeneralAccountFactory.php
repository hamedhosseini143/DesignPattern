<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\AccountRegistry;

class GeneralAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new GeneralAccount();
    }
}
