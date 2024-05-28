<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\InvoicePrice;

class InvoiceDecorator implements InvoicePrice
{
    private \src\DesignPattern\StructuralPatterns \Decorator\InvoicePrice\InvoicePrice $invoicePrice;

    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\InvoicePrice\InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->invoicePrice->price();
    }
}
