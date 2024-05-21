<?php

namespace app\src\DesignPattern\Decorator\InvoicePrice;

use app\src\DesignPattern\Decorator\InvoicePrice\InvoiceDecorator;

class ServiveInvoicePrice extends InvoiceDecorator
{
    public function price(): int
    {
        return parent::price() * 1.1;
    }
}
