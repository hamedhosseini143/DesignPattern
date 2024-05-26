<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Provider\youTube;

use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\VideoPublisher;

class YouTubePublishFactory extends VideoPublisher
{
    public function createVideoPublish(): PublishVideo
    {
        return new YouTubePublish();
    }
}
{

}