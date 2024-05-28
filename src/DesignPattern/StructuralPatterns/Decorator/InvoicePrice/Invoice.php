<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\InvoicePrice;

class Invoice implements InvoicePrice
{
    public function price(): int
    {
        return 100;
    }
}
