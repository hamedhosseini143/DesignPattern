<?php

namespace app\src\DesignPattern\AbstractFactory\Example\Company;

use app\src\DesignPattern\AbstractFactory\Example\Company\Chassis;
use app\src\DesignPattern\AbstractFactory\Example\Company\Engin;
use app\src\DesignPattern\AbstractFactory\Example\Company\Gearbox;

interface CompanyFactory
{
    public function CreateEngin(): Engin;
    public function CreateGearbox(): Gearbox;
    public function CreateChassis(): Chassis;
}
