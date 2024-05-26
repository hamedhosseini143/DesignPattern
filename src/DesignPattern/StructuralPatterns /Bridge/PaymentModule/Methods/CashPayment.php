<?php

namespace Bridge\PaymentModule\Methods;

use Bridge\PaymentModule\Invoice;
use Bridge\PaymentModule\PaymentMethod;

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
