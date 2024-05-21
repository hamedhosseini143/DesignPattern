<?php

namespace src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\apart;

use src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use src\DesignPattern\Creational\FactoryMethod\VideoPublish\VideoPublisher;

class apartPublishFactory extends VideoPublisher
{

    public function createVideoPublish(): PublishVideo
    {
        return new Apart();
    }
}