<?php

namespace src\DesignPattern\AbstractFactory\Example\Company;

interface CompanyFactory
{
    public function CreateEngin(): Engin;
    public function CreateGearbox(): Gearbox;
    public function CreateChassis(): Chassis;
}
