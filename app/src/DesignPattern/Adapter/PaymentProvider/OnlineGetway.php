<?php

namespace app\src\DesignPattern\Adapter\PaymentProvider;

use app\src\DesignPattern\Adapter\PaymentProvider\Invoice;

interface OnlineGetway
{
    public function startPay(Invoice $invoice): void;
}
