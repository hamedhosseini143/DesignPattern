<?php

namespace app\src\DesignPattern\Composite\Example\OrganizationalManagement;

use app\src\DesignPattern\Composite\Example\OrganizationalManagement\OrganizationComponent;

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
     * @param OrganizationComponent $organizationComponent
     * @return void
     */
    public function print(OrganizationComponent $organizationComponent): void
    {
        echo $organizationComponent->render();
    }
}
