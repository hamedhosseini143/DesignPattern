<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class VatInvoicePrice extends InvoiceDecorator
{
    /**
     * @return float
     * add value added tax
     */
    public function price(): float
    {
        return parent::price() * 1.18;
    }
}
