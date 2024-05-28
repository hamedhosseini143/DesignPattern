<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class Invoice implements InvoicePriceInterface
{
    /**
     * @return int
     */
    public function price(): int
    {
        return 100;
    }
}
