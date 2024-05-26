<?php

namespace Bridge\PaymentModule;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
