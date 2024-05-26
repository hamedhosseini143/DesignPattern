<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Provider\youTube;

use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Video;

class YouTubePublish implements PublishVideo
{
    public function publish(Video $video): void
    {
        echo "YouTube video published\n";
    }
}