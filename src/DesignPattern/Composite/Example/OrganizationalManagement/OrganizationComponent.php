<?php

namespace src\DesignPattern\Composite\Example\OrganizationalManagement;

interface OrganizationComponent
{
    public function render(): string;

    public function print( OrganizationComponent $organizationComponent): void;
}
