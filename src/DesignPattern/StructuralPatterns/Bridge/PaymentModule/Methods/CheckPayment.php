<?php

namespace Bridge\PaymentModule\Methods;

use Bridge\PaymentModule\Invoice;
use Bridge\PaymentModule\PaymentMethod;

class CheckPayment extends PaymentMethod
{

    /**
     * @param Invoice $invoice
     * @return mixed
     */
    public function startpay(Invoice $invoice)
    {
        // check payment tasks
        return $this->handler->pay($invoice);
    }
}
