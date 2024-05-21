<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Logger;

class TelegramLogger implements Logger
{
    protected $telegramApi;

    /**
     * @param TelegramApi $telegramApi
     */
    public function __construct(TelegramApi $telegramApi)
    {
        $this->telegramApi = $telegramApi;
    }

    public function log(string $message) : void
    {
        echo "Telegram Logger: $message\n";
    }
}
