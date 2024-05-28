<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\OrganizationalManagement;

class OrganizationItem implements OrganizationComponent
{
    /**
     * @var string
     */
    private string $name;

    /**
     * OrganizationItem constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->name;
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
