<?php

namespace src\DesignPattern\Adapter\Notification;

interface Notifier
{
    public function send(string $message);
}
