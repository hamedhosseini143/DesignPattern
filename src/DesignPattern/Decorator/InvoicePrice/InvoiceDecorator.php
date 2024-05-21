<?php

namespace src\DesignPattern\Decorator\InvoicePrice;

class InvoiceDecorator implements InvoicePrice
{
    private InvoicePrice $invoicePrice;

    public function __construct(InvoicePrice $invoicePrice)
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
