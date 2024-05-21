<?php

namespace app\src\DesignPattern\Composite\MenuBuilder;

class MenuCollection implements MenuComponent
{
    private array $menuItems = [];

    public function add(MenuComponent $menuComponent): void
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
