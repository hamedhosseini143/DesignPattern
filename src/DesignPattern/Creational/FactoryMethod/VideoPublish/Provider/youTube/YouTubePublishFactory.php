<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\youTube;

use src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\Creational\FactoryMethod\VideoPublish\VideoPublisher;

class YouTubePublishFactory extends VideoPublisher
{
    public function createVideoPublish(): PublishVideo
    {
        return new YouTubePublish();
    }
}
{

}