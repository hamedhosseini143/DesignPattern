<?php

namespace app\src\DesignPattern\Bridge\PaymentModule\Methods;

use app\src\DesignPattern\Bridge\PaymentModule\Invoice;
use app\src\DesignPattern\Bridge\PaymentModule\PaymentMethod;

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
