<?php

namespace src\DesignPattern\Creational\FactoryMethod\Publisher;

class Client
{
    private string $publisherType;

    public function __construct(string $publisherType)
    {
        $this->$publisherType = $publisherType;
    }

    public function run()
    {
        if ($this->publisherType === 'linkdin') {
            $publisher = new LinkdinPublisherFactory();

        } elseif ($this->publisherType === 'instagram') {
            $publisher = new InstagramPublisher();
        } else {
            throw new \InvalidArgumentException('Publisher not supported');
        }
    }
}