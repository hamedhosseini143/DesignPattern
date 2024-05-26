<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\Provider\apart;

use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish\VideoPublisher;

class apartPublishFactory extends VideoPublisher
{

    public function createVideoPublish(): PublishVideo
    {
        return new Apart();
    }
}