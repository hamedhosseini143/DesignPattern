<?php

namespace app\src\DesignPattern\Decorator\InvoicePrice;

class InvoiceSrvice
{
    public function calculatePrice(): int
    {
        $invoice = new Invoice(); 
        $serviceInvoice = new ServiveInvoicePrice($invoice); // price normal
        $vatInvoice = new VatInvoicePrice($serviceInvoice); // tax
        return $vatInvoice->price();
    }
}
