<?php

namespace src\DesignPattern\Strategy\Payment;

class PaymentServiceContext
{
    private PaymentMethod $paymentMethod;

    public function setPaymentMethod(PaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(Order $order): void
    {
        $this->paymentMethod->doPayment($order);
    }
}
