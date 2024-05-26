<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company;

interface Chassis
{
    public function CreateChassis(): string;
}
