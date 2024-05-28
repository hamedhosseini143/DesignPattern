<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoiceSrvice
{
    /**
     * @return float
     */
    public function calculatePrice(): float
    {
        $invoice = new Invoice();
        $serviceInvoice = new DeliverInvoicePrice($invoice);
        $vatInvoice = new VatInvoicePrice($serviceInvoice);
        return $vatInvoice->price();
    }
}
