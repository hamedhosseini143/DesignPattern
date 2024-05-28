<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice;

interface InvoicePriceInterface
{
    /**
     * @return int
     */
    public function price(): int;
}
