<?php

namespace Bridge\PaymentModule;

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
