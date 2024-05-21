<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Publisher;

interface PublisherInterface
{
    public function publish(Message $message);
}
