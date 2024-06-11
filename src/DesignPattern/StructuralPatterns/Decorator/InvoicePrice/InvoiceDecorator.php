<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoiceDecorator extends InvoicePrice
{
    /**
     * @var InvoicePrice
     */
    private InvoicePrice $invoicePrice;

    /**
     * @param InvoicePrice $invoicePrice
     */
    public function __construct(InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return $this->invoicePrice->price();
    }
}
