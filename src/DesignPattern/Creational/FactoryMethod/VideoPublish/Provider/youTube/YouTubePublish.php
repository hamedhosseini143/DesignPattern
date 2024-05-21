<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\youTube;

use src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\Creational\FactoryMethod\VideoPublish\Video;

class YouTubePublish implements PublishVideo
{
    public function publish(Video $video): void
    {
        echo "YouTube video published\n";
    }
}