<?php

namespace src\DesignPattern\Adapter\PaymentProvider;

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
