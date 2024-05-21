<?php

namespace app\src\DesignPattern\Adapter\PaymentProvider;

use app\src\DesignPattern\Adapter\PaymentProvider\Invoice;
use app\src\DesignPattern\Adapter\PaymentProvider\OnlineGetway;
use app\src\DesignPattern\Adapter\PaymentProvider\SamanBankGetway;

class SamanGetwayAdapter implements OnlineGetway
{
    private $samanApi;

    public function __construct(SamanBankGetway $samanApi)
    {
        $this->samanApi = $samanApi;
    }

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay($invoice->amount());
    }
}
