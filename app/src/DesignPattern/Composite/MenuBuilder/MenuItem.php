<?php

namespace app\src\DesignPattern\Composite\MenuBuilder;

use app\src\DesignPattern\Composite\MenuBuilder\MenuComponent;

class MenuItem implements MenuComponent
{
    private string $title;
    private string $url;

    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function build() : string
    {
        return "<li><a href='{$this->url}'>{$this->title}</a></li>";
    }
}
