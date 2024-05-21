<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Logger;

class TelegramLoggerFactory extends MessageLogger
{

    protected function createLogger(): Logger
    {
        return new TelegramLogger(new TelegramApi());
    }
}
