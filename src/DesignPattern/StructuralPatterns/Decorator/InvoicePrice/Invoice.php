<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

class Invoice implements InvoicePriceInterface
{
    public function price(): int
    {
        return 100;
    }
}
