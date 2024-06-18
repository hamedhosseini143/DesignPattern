<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\Notification;

class EmailNotifier implements NotifierInterface
{


    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void
    {
        echo "Email notification: " . $message;
    }
}
