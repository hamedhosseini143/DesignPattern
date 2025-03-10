<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\Notification;

class SmsNotifier implements NotifierInterface
{

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void
    {
        echo "Sms: $message";
    }
}
