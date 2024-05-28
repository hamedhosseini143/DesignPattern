<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class Invoice implements InvoicePriceInterface
{
    /**
     * @return float
     */
    public function price(): float
    {
        return 100;
    }
}
