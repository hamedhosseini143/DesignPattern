<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\Mellat;


use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Invoice;
use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\OnlineGatewayInterface;

class MellatProvider implements OnlineGatewayInterface
{

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function startPay(Invoice $invoice): void
    {
        echo "Mellat provider started payment for invoice amount: {$invoice->amount()}\n";
    }
}
