<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Publisher;

class LinkdinPublisher implements PublisherInterface
{

    public function publish(Message $message): void
    {
        echo "Publishing message on Linkdin: " . $message->getTitle() . "\n";
    }
}
