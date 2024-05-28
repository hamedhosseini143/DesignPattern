<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoiceDecorator implements InvoicePriceInterface
{
    private InvoicePriceInterface $invoicePrice;

    public function __construct(InvoicePriceInterface $invoicePrice)
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
