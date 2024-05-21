<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Payment;

class PaymentService
{
    public static function run()
    {
        $creditCardFactory = new CreaditCardFactory('123456789', '123', '12/22');
        $creditCard = $creditCardFactory->createPaymentMethod();
        echo $creditCard->processPayment() . PHP_EOL;

        $payPalFactory = new PayPalMethodFactory('test@test.com', '123');
        $paypal = $payPalFactory->createPaymentMethod();
        echo $paypal->processPayment() . PHP_EOL;
    }
}
