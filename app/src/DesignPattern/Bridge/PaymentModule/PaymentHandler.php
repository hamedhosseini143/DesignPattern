<?php

namespace app\src\DesignPattern\Bridge\PaymentModule;

use app\src\DesignPattern\Bridge\PaymentModule\Invoice;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
