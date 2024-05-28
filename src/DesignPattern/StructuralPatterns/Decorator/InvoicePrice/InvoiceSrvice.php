<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoiceSrvice
{
    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        $invoice = new Invoice(); 
        $serviceInvoice = new ServiveInvoicePrice($invoice); // price normal
        $vatInvoice = new VatInvoicePrice($serviceInvoice); // tax
        return $vatInvoice->price();
    }
}
