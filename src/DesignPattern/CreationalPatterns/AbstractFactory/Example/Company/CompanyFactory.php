<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\Example\Company;

interface CompanyFactory
{
    public function CreateEngin(): Engin;
    public function CreateGearbox(): Gearbox;
    public function CreateChassis(): Chassis;
}
