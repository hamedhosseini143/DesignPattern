<?php

namespace src\DesignPattern\Creational\FactoryMethod\Publisher;

class LinkdinPublisherFactory extends MessagePublisher
{

    protected function createMessage(): PublisherInterface
    {
        return new LinkdinPublisher();
    }
}
