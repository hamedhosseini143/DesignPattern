<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\UserPresenter;

class GetUserCapital extends UserDecorator
{
    /**
     * @return string
     */
    public function getFirstName(): string
    {
           return strtoupper($this->UserInterface->getFirstName());
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return strtoupper($this->UserInterface->getLastName());
    }
}
