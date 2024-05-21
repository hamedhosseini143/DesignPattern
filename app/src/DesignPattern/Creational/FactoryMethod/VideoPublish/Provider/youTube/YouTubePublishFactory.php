<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\youTube;

use app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\VideoPublisher;

class YouTubePublishFactory extends VideoPublisher
{
    public function createVideoPublish(): PublishVideo
    {
        return new YouTubePublish();
    }
}
{

}