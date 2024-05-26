<?php

namespace src\DesignPattern\StructuralPatterns \Composite\MenuBuilder;

class MenuBuilder
{
    public function buildMenu(): string
    {
        $menuItem1 = new MenuItem('google' , 'http://www.google.com');
        $menuItem2 = new \src\DesignPattern\StructuralPatterns \Composite\MenuBuilder\MenuItem('yahoo' , 'http://www.yahoo.com');
        $menuItem3 = new \src\DesignPattern\StructuralPatterns \Composite\MenuBuilder\MenuItem('bing' , 'http://www.bing.com');

        $menu = new MenuCollection();
        $subMenu = new \src\DesignPattern\StructuralPatterns \Composite\MenuBuilder\MenuCollection();

        $subMenu->add($menuItem1);
        $subMenu->add($menuItem2);
        $subMenu->add($menuItem3);

        $menu->add($subMenu);

        return $menu->build();
    }
}
