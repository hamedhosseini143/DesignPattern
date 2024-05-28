<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

interface InvoicePriceInterface
{
    /**
     * @return float
     */
    public function price(): float;
}
