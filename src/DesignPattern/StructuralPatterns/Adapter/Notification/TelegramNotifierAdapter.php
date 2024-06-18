<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\Notification;

class TelegramNotifierAdapter implements NotifierInterface
{
    private TelegramApi $telegramApi;
    private int $chatId;

    public function __construct(TelegramApi $telegramApi, int $chatId)
    {
        $this->telegramApi = $telegramApi;
        $this->chatId = $chatId;
    }

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void
    {
        $this->telegramApi->send($this->chatId, $message);
    }
}
