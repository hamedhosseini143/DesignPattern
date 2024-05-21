<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\VideoPublish;

class Client
{
    private VideoPublisher $videoPublish;


    public function __construct(VideoPublisher $videoPublish)
    {
        $this->videoPublish = $videoPublish;
    }

    public function run(): void
    {
        $this->videoPublish->publish(new Video('Title', 'Description', 'VideoUrl'));
    }
}