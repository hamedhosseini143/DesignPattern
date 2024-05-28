<?php

namespace src\DesignPattern\StructuralPatterns\Composite\MenuBuilder;

class MenuItem implements MenuComponentInterface
{
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $url;

    /**
     * @param string $title
     * @param string $url
     */
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
