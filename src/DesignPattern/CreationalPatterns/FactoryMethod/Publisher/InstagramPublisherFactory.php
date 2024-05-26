<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Publisher;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createMessage(): PublisherInterface
    {
        return new InstagramPublisher();
    }
}
