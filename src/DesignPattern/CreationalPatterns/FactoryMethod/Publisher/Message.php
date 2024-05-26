<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Publisher;
class Message
{
    private $title;
    private $image;
    private $content;

    public function __construct($title)
    {
        $this->title = $title;
        $this->image = $image;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
