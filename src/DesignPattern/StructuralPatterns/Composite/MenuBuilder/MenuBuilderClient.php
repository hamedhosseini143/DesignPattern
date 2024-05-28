<?php

namespace src\DesignPattern\StructuralPatterns\Composite\MenuBuilder;

class MenuBuilderClient
{
    public function buildMenu(): string
    {
        $menuItem1 = new MenuItem('google' , 'http://www.google.com');
        $menuItem2 = new MenuItem('yahoo', 'http://www.yahoo.com');
        $menuItem3 = new MenuItem('bing', 'http://www.bing.com');
        $menuItem4 = new MenuItem('facebook', 'http://www.facebook.com');

        $menu = new MenuCollection();
        $menu->add($menuItem4);
        $subMenu = new MenuCollection();

        $subMenu->add($menuItem1);
        $subMenu->add($menuItem2);
        $subMenu->add($menuItem3);

        $menu->add($subMenu);

        return $menu->build();
    }
}
