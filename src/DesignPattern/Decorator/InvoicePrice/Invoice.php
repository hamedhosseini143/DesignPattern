<?php

namespace src\DesignPattern\Decorator\InvoicePrice;

class Invoice implements InvoicePrice
{
    public function price(): int
    {
        return 100;
    }
}
