<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Provider\ZarinPall;



use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\Invoice;
use src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider\OnlineGatewayInterface;

class ZarinPalProvider implements OnlineGatewayInterface
{

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function startPay(Invoice $invoice): void
    {
        echo "ZarinPal provider started payment for invoice amount: {$invoice->amount()}\n";
    }
}
