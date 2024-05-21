<?php

namespace src\DesignPattern\Decorator\InvoicePrice;

class ServiveInvoicePrice extends InvoiceDecorator
{
    public function price(): int
    {
        return parent::price() * 1.1;
    }
}
