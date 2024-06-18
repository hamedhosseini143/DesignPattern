<?php

namespace src\DesignPattern\StructuralPatterns\Adapter\PaymentProvider;

interface OnlineGatewayInterface
{
    /**
     * @param Invoice $invoice
     * @return void
     */
    public function startPay(Invoice $invoice): void;
}
