<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\Saman;


use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Invoice;
use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\OnlineGatewayInterface;

class SamanGatewayAdapter implements OnlineGatewayInterface
{
    /**
     * @var SamanBankGateway
     */
    private SamanBankGateway $samanApi;

    /**
     * @param SamanBankGateway $samanApi
     */
    public function __construct(SamanBankGateway $samanApi)
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
