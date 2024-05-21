<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Payment;

class PayPalMethod implements PaymentMethod
{
    private string $email;
    private string $password;

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }


    /**
     * @return string
     */
    public function processPayment(): string
    {
        return 'Process payment with PayPal';
    }
}
