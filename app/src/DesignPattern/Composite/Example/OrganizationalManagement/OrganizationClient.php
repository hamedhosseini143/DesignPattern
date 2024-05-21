<?php

namespace app\src\DesignPattern\Composite\Example\OrganizationalManagement;

use app\src\DesignPattern\Composite\Example\OrganizationalManagement\OrganizationGroup;
use app\src\DesignPattern\Composite\Example\OrganizationalManagement\OrganizationItem;

class OrganizationClient
{
    public function run(): void
    {
        $organizationGroup = new OrganizationGroup();
        $organizationGroup->add(new OrganizationItem('CEO'));
        $organizationGroup->add(new OrganizationItem('CTO'));
        $organizationGroup->add(new OrganizationItem('CFO'));

        $organizationGroup2 = new OrganizationGroup();
        $organizationGroup2->add(new OrganizationItem('Manager'));
        $organizationGroup2->add(new OrganizationItem('Developer'));
        $organizationGroup2->add(new OrganizationItem('Designer'));

        $organizationGroup->add($organizationGroup2);

        $organizationGroup->print($organizationGroup);
    }

    public static function main(): void
    {
        $client = new self();
        $client->run();
    }


}
