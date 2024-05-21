<?php

namespace app\src\DesignPattern\Bridge\PaymentModule;

use app\src\DesignPattern\Bridge\PaymentModule\Invoice;
use app\src\DesignPattern\Bridge\PaymentModule\PaymentHandler;

abstract class PaymentMethod
{
    protected $handler;

    /**
     * @param PaymentHandler $handler
     */
    public function __construct(PaymentHandler $handler)
    {
        $this->handler = $handler;
    }
    abstract public function startpay(Invoice $invoice);
}
