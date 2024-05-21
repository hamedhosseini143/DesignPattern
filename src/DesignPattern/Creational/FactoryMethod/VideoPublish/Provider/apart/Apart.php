<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\apart;

use src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\Creational\FactoryMethod\VideoPublish\Video;

class Apart implements PublishVideo
{

    public function publish(Video $video): void
    {
        echo "Publishing video on Apart with title: {$video->getTitle()} and description: {$video->getDescription()} and url: {$video->getUrl()}\n";
    }
}