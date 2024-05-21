<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Publisher;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createMessage(): PublisherInterface
    {
        return new InstagramPublisher();
    }
}
