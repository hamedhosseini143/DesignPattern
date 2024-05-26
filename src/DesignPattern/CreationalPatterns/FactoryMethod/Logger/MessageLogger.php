<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Logger;

abstract class MessageLogger
{
    public function log(string $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }
    abstract protected function createLogger(): Logger;
}
