<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider;

use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\Saman\SamanBankGateway;
use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\Saman\SamanGatewayAdapter;


class AdapterPaymentProviderService
{
    /**
     * @return void
     */
    public function run() : void
    {
        $invoice = new Invoice('123');
        $samanGateway = new SamanGatewayAdapter(new SamanBankGateway( '123456'));
        $samanGateway->startPay($invoice);
    }
}