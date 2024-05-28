<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class ServiveInvoicePrice extends InvoiceDecorator
{
    /**
     * @return int
     */
    public function price(): int
    {
        return parent::price() * 1.1;
    }
}
