<?php

namespace app\src\DesignPattern\Composite\Example\OrganizationalManagement;

use app\src\DesignPattern\Composite\Example\OrganizationalManagement\OrganizationComponent;

class OrganizationGroup implements OrganizationComponent
{
    private array $organ = [];

    public function add(OrganizationComponent $organizationComponent): void
    {
        $this->organ[] = $organizationComponent;
    }

    public function render(): string
    {
        $output = '';
        foreach ($this->organ as $organizationComponent) {
            $output .= $organizationComponent->render();
        }
        return $output;
    }

    /**
     * @param OrganizationComponent $organizationComponent
     * @return void
     */
    public function print(OrganizationComponent $organizationComponent): void
    {
        echo $organizationComponent->render();
    }
}
