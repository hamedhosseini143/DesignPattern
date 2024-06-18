<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment;

interface PaymentMethodInterface
{
    /**
     * @param Order $order
     * @return mixed
     */
    public function doPayment(Order $order);
}
