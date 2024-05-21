<?php

namespace app\src\DesignPattern\Bridge\PaymentModule\Handler;

use app\src\DesignPattern\Bridge\PaymentModule\Invoice;
use app\src\DesignPattern\Bridge\PaymentModule\PaymentHandler;

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
