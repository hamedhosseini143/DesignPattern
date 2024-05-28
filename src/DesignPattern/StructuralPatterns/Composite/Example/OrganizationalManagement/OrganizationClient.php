<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement;

class OrganizationClient
{
    public function run(): void
    {
        $organizationGroup = new OrganizationGroup();
        $organizationGroup->add(new OrganizationItem('CEO'));
        $organizationGroup->add(new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationItem('CTO'));
        $organizationGroup->add(new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationItem('CFO'));

        $organizationGroup2 = new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationGroup();
        $organizationGroup2->add(new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationItem('Manager'));
        $organizationGroup2->add(new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationItem('Developer'));
        $organizationGroup2->add(new \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationItem('Designer'));

        $organizationGroup->add($organizationGroup2);

        $organizationGroup->print($organizationGroup);
    }

    public static function main(): void
    {
        $client = new self();
        $client->run();
    }


}
