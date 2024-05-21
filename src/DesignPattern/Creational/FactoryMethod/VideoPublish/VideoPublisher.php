<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish;

abstract class VideoPublisher
{
    public function publish(Video $video): void
    {
        $videoPublish = $this->createVideoPublish();
        $videoPublish->publish($video);
    }

    abstract public function createVideoPublish(): PublishVideo;
}