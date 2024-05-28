<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\UserPresenter;

class UserDecoratorClient
{
    public function client(): string
    {
        $user = new User('John', 'Doe');
        $Name = new GetUserCapital($user);
        return $Name->getFirstName() . ' ' . $Name->getLastName();
    }
}