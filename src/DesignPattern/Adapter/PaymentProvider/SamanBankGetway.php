<?php

namespace src\DesignPattern\Adapter\PaymentProvider;

class SamanBankGetway
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function pay(int $amount):void
    {
        // code saman bank getway
    }
}
