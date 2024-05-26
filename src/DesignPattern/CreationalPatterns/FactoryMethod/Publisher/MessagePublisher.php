<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Publisher;

abstract class MessagePublisher
{
    public function publish(Message $message): void
    {
        $publisher = $this->createMessage();
        $publisher->publish($message);
    }

    abstract protected function createMessage(): PublisherInterface;
}
