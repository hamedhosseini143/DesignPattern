<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\Notification;

interface NotifierInterface
{
    /**
     * @param string $message
     * @return void
     */
    public function send(string $message) : void;
}
