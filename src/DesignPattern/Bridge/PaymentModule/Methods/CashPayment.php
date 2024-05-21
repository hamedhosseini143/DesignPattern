<?php

namespace src\DesignPattern\Bridge\PaymentModule\Methods;

use src\DesignPattern\Bridge\PaymentModule\Invoice;
use src\DesignPattern\Bridge\PaymentModule\PaymentMethod;

class CashPayment extends PaymentMethod
{

    /**
     * @param Invoice $invoice
     * @return mixed
     */
    public function startpay(Invoice $invoice)
    {
        return $this->handler->pay($invoice);
    }
}
