<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\Saman;


class SamanBankGateway
{
    /**
     * @var string
     */
    private string $apiKey;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param int $amount
     * @return void
     */
    public function pay(int $amount):void
    {
        echo "Saman provider started payment for invoice amount: {$amount}\n";
    }
}
