<?php

namespace Adapter\Notification;

interface Notifier
{
    public function send(string $message);
}
