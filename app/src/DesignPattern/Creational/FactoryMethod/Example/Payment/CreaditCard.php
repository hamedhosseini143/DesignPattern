<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Payment;

class CreaditCard implements PaymentMethod
{
    private string $cardNumber;
    private string $cvv;
    private string $expirationDate;

    /**
     * @param string $cardNumber
     * @param string $cvv
     * @param string $expirationDate
     */
    public function __construct(string $cardNumber, string $cvv, string $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function processPayment(): string
    {
        return 'Process payment with creadit card';
    }
}
