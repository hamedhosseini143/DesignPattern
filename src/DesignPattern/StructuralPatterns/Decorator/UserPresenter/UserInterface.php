<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\UserPresenter;

interface UserInterface
{
    public function getFirstName(): string;
    public function getLastName(): string;
}