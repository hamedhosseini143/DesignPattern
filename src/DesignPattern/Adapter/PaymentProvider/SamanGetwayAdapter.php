<?php

namespace src\DesignPattern\Adapter\PaymentProvider;

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
