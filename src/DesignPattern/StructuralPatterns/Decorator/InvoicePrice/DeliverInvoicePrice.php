<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class DeliverInvoicePrice extends InvoiceDecorator
{
    /**
     * @return float
     * add delivery price
     */
    public function price(): float
    {
        return parent::price() * 1.1;
    }
}
