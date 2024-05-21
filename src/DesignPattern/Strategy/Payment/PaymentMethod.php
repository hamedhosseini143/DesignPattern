<?php

namespace src\DesignPattern\Strategy\Payment;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
