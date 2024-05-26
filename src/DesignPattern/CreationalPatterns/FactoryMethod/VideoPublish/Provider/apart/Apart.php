<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Provider\apart;

use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Video;

class Apart implements PublishVideo
{

    public function publish(Video $video): void
    {
        echo "Publishing video on Apart with title: {$video->getTitle()} and description: {$video->getDescription()} and url: {$video->getUrl()}\n";
    }
}