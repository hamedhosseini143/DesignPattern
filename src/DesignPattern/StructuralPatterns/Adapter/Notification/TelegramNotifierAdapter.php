<?php

namespace Adapter\Notification;

class TelegramNotifierAdapter implements Notifier
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
     * @return mixed
     */
    public function send(string $message)
    {
        $this->telegramApi->send($this->chatId, $message);
    }
}
