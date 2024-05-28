<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement;

interface OrganizationComponent
{
    public function render(): string;

    public function print( OrganizationComponent $organizationComponent): void;
}
