<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class ClientDecoratorOverprice
{
    /**
     * @return float
     */
    public function calculatePrice(): float
    {
        $invoice = new InvoicePrice();
        $serviceInvoice = new DeliverInvoicePrice($invoice);
        $vatInvoice = new VatInvoicePrice($serviceInvoice);
        return $vatInvoice->price();
    }
}