<?php

namespace src\DesignPattern\StructuralPatterns\Composite\MenuBuilder;

class MenuCollection implements MenuComponentInterface
{
    /**
     * @var array
     */
    private array $menuItems = [];

    /**
     * @param MenuComponentInterface $menuComponent
     * @return void
     */
    public function add(MenuComponentInterface $menuComponent): void
    {
        $this->menuItems[] = $menuComponent;
    }
    /**
     * @return mixed
     */
    public function build() : string
    {
        $result = "<ul>";
        foreach ($this->menuItems as $menuItem) {
            $result .= $menuItem->build();
        }
        $result .= "</ul>";
        return $result;
    }
}
