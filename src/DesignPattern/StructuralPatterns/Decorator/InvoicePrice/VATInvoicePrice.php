<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class VATInvoicePrice extends InvoiceDecorator
{
    /**
     * @return int
     */
    public function price(): int
    {
        return parent::price() * 1.18;
    }
}
