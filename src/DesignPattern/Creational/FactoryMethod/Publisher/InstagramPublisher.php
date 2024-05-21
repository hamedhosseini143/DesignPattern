<?php

namespace src\DesignPattern\Creational\FactoryMethod\Publisher;

class InstagramPublisher implements PublisherInterface
{
    public function publish(Message $message)
    {
        echo "Publishing message on Instagram: " . $message->getContent() . PHP_EOL;
    }
}
