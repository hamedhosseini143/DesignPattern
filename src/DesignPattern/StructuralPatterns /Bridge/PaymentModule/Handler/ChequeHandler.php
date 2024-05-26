<?php

namespace Bridge\PaymentModule\Handler;

use Bridge\PaymentModule\Invoice;
use Bridge\PaymentModule\PaymentHandler;

class ChequeHandler implements PaymentHandler
{

    /**
     * @param Invoice $invoice
     * @return mixed
     */
    public function pay(Invoice $invoice)
    {
        // TODO: Implement pay() method.
    }
}
