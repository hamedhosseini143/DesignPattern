<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Logger;

class SlackLogerFactory extends MessageLogger
{

    protected function createLogger(): Logger
    {
        return new SlackLogger();
    }
}
