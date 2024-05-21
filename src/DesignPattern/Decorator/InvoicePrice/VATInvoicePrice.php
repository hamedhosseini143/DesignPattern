<?php

namespace src\DesignPattern\Decorator\InvoicePrice;

class VATInvoicePrice extends InvoiceDecorator
{
    public function price(): int
    {
        return parent::price() * 1.18;
    }
}
