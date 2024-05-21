<?php

namespace src\DesignPattern\Adapter\PaymentProvider;

interface OnlineGetway
{
    public function startPay(Invoice $invoice): void;
}
