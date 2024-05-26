<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
