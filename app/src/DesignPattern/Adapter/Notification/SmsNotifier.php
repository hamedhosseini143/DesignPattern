<?php

namespace app\src\DesignPattern\Adapter\Notification;

use app\src\DesignPattern\Adapter\Notification\Notifier;

class SmsNotifier implements Notifier
{

    /**
     * @param string $message
     * @return mixed
     */
    public function send(string $message)
    {
        // TODO: Implement send() method.
    }
}
