<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Logger;

class SlackLogerFactory extends MessageLogger
{

    protected function createLogger(): Logger
    {
        return new SlackLogger();
    }
}
