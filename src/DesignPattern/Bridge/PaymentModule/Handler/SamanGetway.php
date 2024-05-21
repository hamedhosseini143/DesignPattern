<?php

namespace src\DesignPattern\Bridge\PaymentModule\Handler;

use src\DesignPattern\Bridge\PaymentModule\Invoice;
use src\DesignPattern\Bridge\PaymentModule\PaymentHandler;

class SamanGetway implements PaymentHandler
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
