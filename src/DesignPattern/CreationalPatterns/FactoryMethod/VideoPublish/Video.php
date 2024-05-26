<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish;

class Video
{
    private string $title;
    private string $description;
    private string $url;

    /**
     * @param string $title
     * @param string $description
     * @param string $url
     */
    public function __construct(string $title, string $description, string $url)
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

}