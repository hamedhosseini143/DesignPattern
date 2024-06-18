<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\Notification;

class TelegramApi
{
    /**
     * @param int $chatId
     * @param string $message
     * @return void
     */
    public function send(int $chatId, string $message): void
    {
       echo "Telegram: $message";
    }
}
