<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Logger;

abstract class MessageLogger
{
    public function log(string $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }
    abstract protected function createLogger(): Logger;
}
