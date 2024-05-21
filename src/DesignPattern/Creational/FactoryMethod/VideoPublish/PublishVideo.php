<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish;

interface PublishVideo
{
    public function publish(Video $video): void;
}