<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement;

class OrganizationGroup implements OrganizationComponent
{
    private array $organ = [];

    public function add(\src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationComponent $organizationComponent): void
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
     * @param \src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationComponent $organizationComponent
     * @return void
     */
    public function print(\src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement\OrganizationComponent $organizationComponent): void
    {
        echo $organizationComponent->render();
    }
}
