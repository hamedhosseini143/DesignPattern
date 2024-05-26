<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\VideoPublish;

interface PublishVideo
{
    public function publish(Video $video): void;
}