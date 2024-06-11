<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class InvoicePrice implements InvoicePriceInterface
{
    /**
     * @return float
     */
    public function price(): float
    {
        return 100;
    }
}
