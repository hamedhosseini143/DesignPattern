<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Publisher;

class LinkdinPublisherFactory extends MessagePublisher
{

    protected function createMessage(): PublisherInterface
    {
        return new LinkdinPublisher();
    }
}
