<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\Payment;

class PayPalMethodFactory implements PaymentMethodFactory
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
     * @return PaymentMethod
     */
    public function createPaymentMethod(): PaymentMethod
    {
        return new PayPalMethod( $this->email, $this->password);
    }
}
