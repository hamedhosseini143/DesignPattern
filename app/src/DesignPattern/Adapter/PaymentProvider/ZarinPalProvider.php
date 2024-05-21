<?php

namespace app\src\DesignPattern\Adapter\PaymentProvider;

use app\src\DesignPattern\Adapter\PaymentProvider\Invoice;
use app\src\DesignPattern\Adapter\PaymentProvider\OnlineGetway;

class ZarinPalProvider implements OnlineGetway
{

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function startPay(Invoice $invoice): void
    {
        // TODO: Implement startPay() method.
    }
}
