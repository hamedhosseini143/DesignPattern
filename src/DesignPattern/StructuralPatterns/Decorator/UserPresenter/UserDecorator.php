<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\UserPresenter;

abstract class UserDecorator implements UserInterface
{
    protected UserInterface $UserInterface;

    public function __construct(UserInterface $UserInterface)
    {
        $this->UserInterface = $UserInterface;
    }
}