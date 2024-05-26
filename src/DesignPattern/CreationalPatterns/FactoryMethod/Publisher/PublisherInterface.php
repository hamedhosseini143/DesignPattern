<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Publisher;

interface PublisherInterface
{
    public function publish(Message $message);
}
