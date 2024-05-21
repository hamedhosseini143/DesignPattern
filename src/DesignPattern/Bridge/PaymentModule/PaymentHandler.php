<?php

namespace src\DesignPattern\Bridge\PaymentModule;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
