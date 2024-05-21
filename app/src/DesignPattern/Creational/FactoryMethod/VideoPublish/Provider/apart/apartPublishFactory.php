<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\Provider\apart;

use app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\PublishVideo;
use app\src\DesignPattern\Creational\FactoryMethod\VideoPublish\VideoPublisher;

class apartPublishFactory extends VideoPublisher
{

    public function createVideoPublish(): PublishVideo
    {
        return new Apart();
    }
}