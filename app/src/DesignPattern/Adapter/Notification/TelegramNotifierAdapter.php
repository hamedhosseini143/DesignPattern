<?php

namespace app\src\DesignPattern\Adapter\Notification;

use app\src\DesignPattern\Adapter\Notification\Notifier;
use app\src\DesignPattern\Adapter\Notification\TelegramApi;

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
