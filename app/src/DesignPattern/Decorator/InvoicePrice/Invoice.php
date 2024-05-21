<?php

namespace app\src\DesignPattern\Decorator\InvoicePrice;

use app\src\DesignPattern\Decorator\InvoicePrice\InvoicePrice;

class Invoice implements InvoicePrice
{
    public function price(): int
    {
        return 100;
    }
}
