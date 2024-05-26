<?php

namespace Adapter\PaymentProvider;

interface OnlineGetway
{
    public function startPay(Invoice $invoice): void;
}
