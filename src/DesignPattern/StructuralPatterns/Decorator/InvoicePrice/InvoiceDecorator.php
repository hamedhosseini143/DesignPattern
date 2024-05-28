<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoiceDecorator implements InvoicePriceInterface
{
    /**
     * @var InvoicePriceInterface
     */
    private InvoicePriceInterface $invoicePrice;

    /**
     * @param InvoicePriceInterface $invoicePrice
     */
    public function __construct(InvoicePriceInterface $invoicePrice)
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
