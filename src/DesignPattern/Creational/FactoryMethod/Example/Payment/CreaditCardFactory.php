<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\Payment;

class CreaditCardFactory implements PaymentMethodFactory
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

    public function createPaymentMethod(): PaymentMethod
    {
        return new CreaditCard($this->cardNumber, $this->cvv, $this->expirationDate);
    }
}
