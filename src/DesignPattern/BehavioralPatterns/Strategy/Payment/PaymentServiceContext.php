<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment;

class PaymentServiceContext
{
    /**
     * @var PaymentMethodInterface
     */
    private PaymentMethodInterface $paymentMethod;

    /**
     * @param PaymentMethodInterface $paymentMethod
     * @return void
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @param Order $order
     * @return void
     */
    public function pay(Order $order): void
    {
        $this->paymentMethod->doPayment($order);
    }
}
